<?php
// src/AppBundle/Controller/StatsController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
	// controller for displaying game play stats
	public function indexAction()
	{
		// get all possible moves (rock, paper, etc)
		$action = $this->getDoctrine()->getRepository('AppBundle:Actions')->findAll();
		foreach($action as $v)
			$actions[$v->id] = $v->action;

		// get the gameplay history
		$history = $this->getDoctrine()->getRepository('AppBundle:History')->findAll();

		// get the data to the user
		return $this->render('default/stats.html.twig', array(
			'history' => $history,
			'actions' => $actions
		));
	}

}