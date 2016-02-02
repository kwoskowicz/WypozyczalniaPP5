<?php

namespace WypozyczalniaBundle\Controller;

use WypozyczalniaBundle\Entity\History;
use WypozyczalniaBundle\Entity\Car;
use WypozyczalniaBundle\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HistoryController extends Controller 
{
	
	public function addHistoryAction($page, Request $request)
	{

		//pobiera wartosc car znajdujaca sie w tabeli
		$em = $this->getDoctrine()->getEntityManager();
  		$car_id = $em->getRepository('WypozyczalniaBundle:Car')->find($page);
		
  		$session = $this -> getRequest() -> getSession();
	 	$login = $session->get('login');
	 	$username = $login -> getUsername();


	 	$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT u.userId 
		FROM WypozyczalniaBundle:User u
		WHERE u.login  = :login
		'
		)->setParameter('login', $username)
		->getScalarResult();


		$ids = array_column($query, "userId");

		$userLp = $ids[0];

	
		
	 	 $user_id = $em->getRepository('WypozyczalniaBundle:User')->find($userLp);

  		  
	 	
		$history = new History();
		$history->setCar($car_id);
		$history->setUser($user_id);
		 
		$form = $this->createFormBuilder($history)
			->add('historyText', 'text')
			->add('rate', 'integer')
			->add('save', 'submit', array('label' => 'Opisz swoje wrazenia!'))
			->getForm();

			$form -> handleRequest($request);
			$em = $this->getDoctrine()->getManager();

		if ($form->isValid()) {
    		 
   			 $em = $this->getDoctrine()->getManager();
   			 $em->persist($history);
   			 $em->flush();	
   			
   			 $request->getSession()->getFlashBag()
   			 ->add('success', 'Recenzja została dodana!!');

   			}
		$user = $this->get('security.context')->getToken()->getUser();
		$session = $request -> getSession(); 


		$repository = $this->getDoctrine()->getRepository('WypozyczalniaBundle:Car');				
		$car = $repository->findOneBycarId($page);
		
		
	if ($request -> getMethod() == 'POST') {
		return $this->render('WypozyczalniaBundle:DashBoard:singleindex.html.twig', array(
			'form' => $form->createView(),
			'title' => 'Recenzja',		
			'car' => $car,
			'recenzja' => 'Recenzja została dodana!!!',	
			'user' => $user
			));

	}
	
	return $this->render('WypozyczalniaBundle:AddReview:addhistory.html.twig', array(
			'form' => $form->createView(),
			'title' => 'Recenzja',		
			'car' => $car,
			'user' => $user
			));
	}	
}