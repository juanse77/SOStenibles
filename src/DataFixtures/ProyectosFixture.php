<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Proyectos;
use App\Entity\Necesidades;

class ProyectosFixture extends BaseFixture
{

    protected function loadData(ObjectManager $manager)
    {
		$this->createMany(Proyectos::class, 20, function(Proyectos $proyecto, $count) use($manager) {
			$proyecto->setNombre("Limpieza de playas".$count)
				->setFoto("playa_sucia2.jpg")
				->setDescripcion(<<<EOF
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi deserunt quisquam!
EOF
					);

			/**var \DateTime */
			$fecha_inicio = new \DateTime();
			
			$fecha_inicio->setDate(rand(2018, 2022), rand(1, 12), rand(1, 28));
			$proyecto->setFechaInicio($fecha_inicio);
			
			$fecha_fin = (clone $fecha_inicio)->add(new \DateInterval('P1Y'));
			$proyecto->setFechaFin($fecha_fin);

            // Aportación económica
            if($this->faker->boolean(85)){
                $necesidad = new Necesidades();

                $necesidad->setTipo(1);
                $necesidad->setCantidadNecesaria(rand(1, 10)*1000);
                $necesidad->setDescripcion("");
                $necesidad->setProyecto($proyecto);

                $manager->persist($necesidad);
            }

            //Aportación material
            if($this->faker->boolean(20)){
                $necesidad = new Necesidades();

                $necesidad->setTipo(2);
                $necesidad->setCantidadNecesaria(rand(1, 10));
                $necesidad->setDescripcion("Sillas de playa");
                $necesidad->setProyecto($proyecto);

                $manager->persist($necesidad);
            }

            // Voluntariado corporativo
            if($this->faker->boolean(20)){
                $necesidad = new Necesidades();

                $necesidad->setTipo(3);
                $necesidad->setCantidadNecesaria(rand(1, 10));
                $necesidad->setDescripcion("Operarios de limpieza");
                $necesidad->setProyecto($proyecto);

                $manager->persist($necesidad);
            }
			
		});
		
        $manager->flush();
    }
}
