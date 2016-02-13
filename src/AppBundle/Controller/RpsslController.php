<?php
// src/AppBundle/Controller/RpsslController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Actions;
use AppBundle\Entity\History;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RpsslController extends Controller
{
	// controller for creating a game form, or displaying game results
	public function indexAction(Request $request)
	{
		// set up the new game
		$history = new History();
		$history->setPlayer1name('Computer 1');
		$history->setPlayer2name('Computer 2');

		// what are our allowed moves
		$action = $this->getDoctrine()->getRepository('AppBundle:Actions')->findAll();
		foreach($action as $v)
			$actions[$v->id] = $v->action;
		ksort($actions);

		// build our form
		$form = $this->createFormBuilder($history)
			->add('player1name', 'text', array('label' => 'Player 1 Name', 'label_attr' => array('class' => 'player1'), 'attr' => array('class' => 'player1', 'placeholder' => 'Enter Player 1 Name')))
			->add('player1action', 'choice', array('choices' => $actions, 'label' => 'Action', 'label_attr' => array('class' => 'player1'), 'attr' => array('class' => 'player1')))
			->add('button1', 'button', array('label' => 'Toggle Player', 'attr' => array('class' => 'toggle player1') ))
			->add('player2name', 'text', array('label' => 'Player 2 Name', 'label_attr' => array('class' => 'player2'), 'attr' => array('class' => 'player2', 'placeholder' => 'Enter Player 2 Name')))
			->add('player2action', 'choice', array('choices' => $actions, 'label_attr' => array('class' => 'player2'), 'label' => 'Action', 'attr' => array('class' => 'player2')))
			->add('button2', 'button', array('label' => 'Toggle Player', 'attr' => array('class' => 'toggle player2') ))
			->add('save', 'submit', array('label' => 'Play', 'attr' => array('class' => 'btn-success pull-right')))
			->getForm();

		// if it submitted, we should do something with it
		$form->handleRequest($request);

		// check submitted and completed properly
		// form is submitted properly
		if ($form->isSubmitted() && $form->isValid()) {
			$theRequest = $request->request->get('form');
			$count = count($actions) - 1;
			$p1 = ($theRequest['player1action']) ? $theRequest['player1action'] : rand(1, $count);
			$p2 = ($theRequest['player2action']) ? $theRequest['player2action'] : rand(1, $count);
			$theRequest['player1action'] = $p1; $theRequest['player2action'] = $p2;

			// check results of what each player submitted if they did not use the same move
			if($p1 !== $p2) : 
				// going to look for possible comparisons
				$compares = $this->getDoctrine()->getRepository('AppBundle:Compares');
				// checking where both options were thrown
				$query = $compares->createQueryBuilder('a')
					->where("a.action1 in ($p1, $p2) AND a.action2 in ($p1, $p2)")
					->getQuery();
				// should only have 1 result, but lets stop when we do find that one
				$compare = $query->setMaxResults(1)->getOneOrNullResult();
				// set that result for insert
				$history->setWinner($compare->action1);

			// or, they used the same move
			else :
				$compare = array(
					'id'      => 0,
					'action1' => $p1,
					'action2' => $p2,
					'result'  => 'ties'
				);
				// set 0 for insert, indicating tie
				$history->setWinner(0);
			endif;

			// create our insert, and put it in the db
			$history->setPlayer1action($p1);
			$history->setPlayer2action($p2);
//			$history->setWinner($compare->action1); // this was already handled above, removed
			$history->setCreated_at( new \DateTime() );

			$em = $this->getDoctrine()->getManager();
			$em->persist($history);
			$em->flush();

			// all done, lets go to the results page so the players can see how they did
			return $this->render('default/results.html.twig', array(
				'actions' => $actions,
				'request' => $theRequest,
				'compare' => $compare
			));
		}

		// form is not submitted or not completed properly, so we send them to the form
		return $this->render('default/rpssl.html.twig', array(
			'form' => $form->createView(),
		));
	}
}