<?php
// src/AppBundle/Controller/StatsController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
	public function indexAction()
	{
		$action = $this->getDoctrine()->getRepository('AppBundle:Actions')->findAll();
		foreach($action as $v)
			$actions[$v->id] = $v->action;

		$history = $this->getDoctrine()->getRepository('AppBundle:History')->findAll();

		return $this->render('default/stats.html.twig', array(
			'history' => $history,
			'actions' => $actions
		));
	}

}