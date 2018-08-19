<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SosteniblesController extends AbstractController {

	public function index() {
        return $this->render('sostenibles/index.html.twig');
	}

	public function proyectos($page = 1) {
        return $this->render('sostenibles/proyectos.html.twig', ['page' => $page]);
	}
	
	public function contacto() {
        return $this->render('sostenibles/contacto.html.twig');
	}
	
	public function proyecto($id_proyecto) {
        return $this->render('sostenibles/proyecto.html.twig', ['id_proyecto' => $id_proyecto]);
	}
	
	public function home($id_usuario) {
        return $this->render('sostenibles/home.html.twig', ['id_usuario' => $id_usuario]);
	}
	
	public function logo($id_proyecto) {
        return $this->render('sostenibles/logo.html.twig', ['id_proyecto' => $id_proyecto]);
	}
}
