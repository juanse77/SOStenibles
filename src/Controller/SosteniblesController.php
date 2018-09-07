<?php

namespace App\Controller;

use App\Repository\ProyectosRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SosteniblesController extends AbstractController {

	public function index() {
        return $this->render('sostenibles/index.html.twig');
	}

	public function proyectos(ProyectosRepository $repository, Request $request, PaginatorInterface $paginator) {

        $q = $request->query->get('q');
        $queryBuilder = $repository->getWithSearchQueryBuilder($q);

	    $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page',1),
            2
        );

        return $this->render('sostenibles/proyectos.html.twig', [
            'pagination' => $pagination
        ]);
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
