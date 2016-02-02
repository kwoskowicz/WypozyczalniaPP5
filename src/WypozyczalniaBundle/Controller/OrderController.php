<?php

namespace WypozyczalniaBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use WypozyczalniaBundle\Entity\Car_Order;
use WypozyczalniaBundle\Entity\Has_Order;
use WypozyczalniaBundle\Entity\Car;
use WypozyczalniaBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends Controller {

	/**
	 * @Route("/history")
	 * @Template()
	 */
	public function historyAction() {
			
		$repository = $this->getDoctrine()->getRepository('WypozyczalniaBundle:Car_Order');
		
	
					
			      $stmt = $this->getDoctrine()->getManager()  
	                   ->getConnection()  
	                   ->prepare(
						'SELECT 
						Car.name, Car.price, Car_Order.order_data, Car_Order.order_status 
						FROM 
						(Car_Order LEFT JOIN Has_Order ON Car_Order.order_id = Has_Order.order_id)
						INNER JOIN Car ON Has_Order.car_id = Car.car_id 
						ORDER BY 
						name DESC'
	                   	);
						
	      $stmt->execute();  
	      $orders =  $stmt->fetchAll();  
		  
		return $this -> render('WypozyczalniaBundle:Order:history.html.twig', array('name' => "My orders", 'orders' => $orders));

	}

}
