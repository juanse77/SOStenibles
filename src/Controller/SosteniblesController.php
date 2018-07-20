<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SosteniblesController extends Controller {

	public function index() {
		$number = random_int(0, 100);

        return $this->render('sostenibles/number.html.twig', array(
            'number' => $number,
        ));
	}

}
