<?php
namespace	WypozyczalniaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use WypozyczalniaBundle\Form\UserType;
use WypozyczalniaBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /**
     * @Route("/register")
     * @Template()
     */
   
    public function registerAction(Request $request)
    {
        
		$user = new User();
		
		
		
    	$form = $this->createForm(new UserType(), $user);
		$form->handleRequest($request);
		
		
		if ($form->isValid()) {
   			 $user->setRole(1); //rola u¿ytkownika
    		 $user->setItemStatus(1);	//u¿ytkownik aktywny
    		 
   			 $em = $this->getDoctrine()->getManager();
   			 $em->persist($user);
   			 $em->flush();

         $request->getSession()->getFlashBag()
         ->add('success', 'Konto zosta³o poprawnie utworzne! Mo¿esz teraz siê zalogowaæ');
			 
   			 // return $this->redirect($this->generateUrl('user'), 301);
			 
		}
		
  if ($request -> getMethod() == 'POST') {		
        return $this->render('WypozyczalniaBundle:Register:after_register.html.twig', array(
        'form' => $form->createView(),
        'title' => 'Rejestracja'
      ));
        
		}
    return $this->render('WypozyczalniaBundle:Register:register.html.twig', array(
        'form' => $form->createView(),
        'title' => 'Rejestracja'
      ));
    }

}