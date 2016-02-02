<?php

namespace WypozyczalniaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends Controller
{
	public function payAction()
	{
		$data = [
			'id' => 666,
			'kwota' => 69,
			'waluta' => 'PLN',
			'opis' => 'Platnosc za wypozyczenie samochodu',
			'control' => 'JB007',
			'URLC' => 'http://v-ie.uek.krakow.pl/~s168720/app_dev.php/payment/handle',
			'firstname' => 'Jakub',
			'nazwisko' => 'Woskowicz'
		];
		
		$params = http_build_query($data);
		
		$url = sprintf(
			'%s?%s',
			'https://ssl.dotpay.pl/',
			$params
		);
		
		return new RedirectResponse($url);
	}
	
	public function receivePaymentAction(Request $request)
	{
		$logger = $this->get('logger');
		$logger->info('masz nowy URLC');
		$logger->info(var_export($request->request->all(), true));
		
		$response = $this->get('payment.handler')
			->handlePayment($request->request->all())
			;
			
		return new Response($response);
	}
}