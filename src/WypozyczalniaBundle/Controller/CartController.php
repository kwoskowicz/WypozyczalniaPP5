<?php

namespace WypozyczalniaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use WypozyczalniaBundle\Entity\Car;
use Symfony\Component\HttpFoundation\Request;

class CartController extends Controller {
	/**
	 * @Route("/cart")
	 * @Template()
	 */

	public function cartAction(Request $request) {

		$session = $this -> getRequest() -> getSession();
		$cart = $session -> get('cart', array());

		If ($cart != '') {

				
				$em = $this -> getDoctrine() -> getEntityManager();
				$car = $em -> getRepository('WypozyczalniaBundle:Car') -> findByCarId($cart);


			return $this -> render('WypozyczalniaBundle:Cart:cart.html.twig', array('car' => $car, 'empty' => false));

		} else {
			return array('empty' => true);
		}

	}

	public function addAction(Request $request, $page) {


		
		$session = $this -> getRequest() -> getSession();
	
		$id = $session->get('carId', array());

		
		$session -> set('cart', $id);

		
		 $request->getSession()->getFlashBag()
         ->add('success', 'Dodano!');

         $repository = $this->getDoctrine()->getRepository('WypozyczalniaBundle:Car');
		$session = $this -> getRequest() -> getSession();
         $car = $repository->findOneBycarId($page);
		
		return $this->render('WypozyczalniaBundle:DashBoard:singleindex.html.twig', array(
			'car' => $car,
			'page' => 'page'
			));
	}

	public function removeAction(Request $request) {

		$session = $this -> getRequest() -> getSession();
		$session->remove('cart');
		$cart = $session -> get('cart');
	    $em = $this -> getDoctrine() -> getEntityManager();
		$car = $em -> getRepository('WypozyczalniaBundle:Car') -> findByCarId($cart);
			$request->getSession()->getFlashBag()
         	->add('valid', 'Usunieto z koszyka');

		return $this -> render('WypozyczalniaBundle:Cart:cart.html.twig', array('car' => $car, 'empty' => false));
	  
	}

	public function validAction(Request $request)
	{
		$request->getSession()->getFlashBag()
         	->add('valid', 'Niezalogowani uzytkownicy nie moga skladac zamowień');
        $request->getSession()->getFlashBag()
         	->add('reg', 'Zarejestruj sie zanim dokonasz zamówienia');
         	

        $session = $this -> getRequest() -> getSession();
		$cart = $session -> get('cart', array());

		If ($cart != '') {

				$em = $this -> getDoctrine() -> getEntityManager();
				$car = $em -> getRepository('WypozyczalniaBundle:Car') -> findByCarId($cart);

			return $this -> render('WypozyczalniaBundle:Cart:cart.html.twig', array('car' => $car, 'empty' => false));

		} else {
			return array('empty' => true);
		}
	}

}
