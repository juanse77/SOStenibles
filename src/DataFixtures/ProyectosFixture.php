<?php

namespace App\DataFixtures;

use App\DataFixtures\BaseFixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Proyectos;

class ProyectosFixture extends BaseFixture
{
    protected function loadData(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
		$this->createMany(Proyectos::class, 20, function(Proyectos $proyecto, $count){
			$proyecto->setNombre("Limpieza da playas")
				->setSlug("limpieza-de-playas".$count)
				->setDescripcion(<<<EOF
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
EOF
					);
			$fecha_inicio = new \DateTime();
			
			$fecha_inicio->setDate(rand(2018, 2022), rand(1, 12), rand(1, 28));
			$proyecto->setFechaInicio($fecha_inicio);
			
			$fecha_fin = (clone $fecha_inicio)->add(new \DateInterval('P1Y'));
			$proyecto->setFechaFin($fecha_fin);
			
		});
		
        $manager->flush();
    }
}
