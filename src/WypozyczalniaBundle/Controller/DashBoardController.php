<?php

namespace WypozyczalniaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DashBoardController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
   	

    public function indexAction(Request $request)
    {
    	     	
     	$category = 'Most Popular';
		$category2 = 'Most Ordered';
		$tag = '';
		$repository = $this->getDoctrine()->getRepository('WypozyczalniaBundle:Car');		
		$car = $repository->findByPrice(7);

		
		$value = '';
		$session = $request -> getSession('cart'); 
		if ($request -> getMethod() == 'POST') 
		{
			
			$cart = $session->remove('cart');
			
			$value = $request->getSession()->getFlashBag()
   			 ->add('success', 'Transakcja przebiegła pomyślnie!');
			
		}
		
		
	

	      $stmt = $this->getDoctrine()->getManager()  
	                   ->getConnection()  
	                   ->prepare(
	                   	'SELECT
	                   	 name, price, img_url, description, Car.car_id, SUM( History.car_id) Suma, COUNT(name) Count 
	                   	FROM 
	                   	 History LEFT JOIN Car 
	                   	ON
	                   	 History.car_id = Car.car_id
	                   	 GROUP BY 
	                   	name
	                   	 ORDER BY
	                   	Count DESC
	                   	LIMIT 3'
	                   	);  
	      
	      $stmt->execute();  
	      $mostPopular =  $stmt->fetchAll();  

		  $stmy = $this->getDoctrine()->getManager()  
	                   ->getConnection()  
	                   ->prepare(
	                   	'SELECT
	                   	  name, price, img_url, description, Car.car_id, COUNT(name) Count 
	                   	FROM 
	                   	  Car Inner Join Has_Order
	                   	ON
	                   	  Car.car_id = Has_Order.car_id
	                   	GROUP BY 
	                   	name
	                   	ORDER BY
	                   	 Count DESC
	                   	LIMIT 3'
	                   	);  
	      
	      $stmy->execute();  
	      $mostOrdered =  $stmy->fetchAll(); 
	 
	 

		return $this->render('WypozyczalniaBundle:DashBoard:index.html.twig', array(
	    	'car' => $car,
	    	'category' => $category,
			'category2' => $category2,
			'tag' => $tag,
	    	'name' => 'DashBoard',
	    	'popular' => $mostPopular,
	    	'ordered' => $mostOrdered
	    	));
		
		
		
	}

	public function selectAction($type)
	{
		$repository = $this->getDoctrine()->getRepository('WypozyczalniaBundle:Car');
		
		$category = '';
		$category2 = '';
		$tag = '1';
		if ($type == 'osobowe'){
			$type = 1;
			$category = 'Osobowe';
			$car = $repository->findBycategory($type);
		}
		if($type == 'dostawcze'){
			$type = 2;
			$category = 'Dostawcze';
			$car = $repository->findBycategory($type);
		} if ($type == 'ciezarowe'){
			$type = 3;
			$category = 'ciezarowe';
			$car = $repository->findBycategory($type);
		} 
		//exit(\Doctrine\Common\Util\Debug::dump($car));
		return $this->render('WypozyczalniaBundle:DashBoard:index.html.twig', array(
			'name' => 'Kategoria: '.$category,
			'category' => $category,
			'category2' => $category2,
			'tag' => $tag,
			'car' => $car,
			'popular' => '',
			'ordered' => ''
			));
	}

	public function carAction($page)
	{
		
		$repository = $this->getDoctrine()->getRepository('WypozyczalniaBundle:Car');
		$session = $this -> getRequest() -> getSession();
		$session -> remove('carId');
		$session ->set('carId', $page);

		
				
		$car = $repository->findOneBycarId($page);
		//exit(\Doctrine\Common\Util\Debug::dump($car));
		return $this->render('WypozyczalniaBundle:DashBoard:index.html.twig', array(
			'name' => 'Wybrane auto',
			'car' => $car,
			'page' => $page
			));
	}
}
