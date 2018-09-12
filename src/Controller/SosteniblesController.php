<?php

namespace App\Controller;

use App\Repository\ProyectosRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Proyectos;

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

	    $num_proyectos_activos = $repository->contadorProyectosActivos();

        return $this->render('sostenibles/proyectos.html.twig', [
            'pagination' => $pagination,
            'num_proyectos_activos' => $num_proyectos_activos
        ]);
	}
	
	public function contacto() {
        return $this->render('sostenibles/contacto.html.twig');
	}
	
	public function proyecto(Proyectos $proyecto) {

        return $this->render('sostenibles/proyecto.html.twig', ['proyecto' => $proyecto]);
	}

}
