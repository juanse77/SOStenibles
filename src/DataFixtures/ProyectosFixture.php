<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Proyectos;
use App\Entity\Necesidades;
use App\Entity\Usuarios;
use App\Entity\Empresas;
use App\Entity\Personas;

class ProyectosFixture extends BaseFixture
{

    private static $logos = ["logo1.jpg", "logo2.jpg", "logo3.jpg", "logo4.jpg", "logo5.jpg"];

    protected function creaProyectos(ObjectManager $manager)
    {
		$this->createMany(Proyectos::class, 20, function(Proyectos $proyecto, $count) use($manager) {
			$proyecto->setNombre("Limpieza da playas")
				->setSlug("limpieza-de-playas".$count)
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

    protected function creaUsuarios(ObjectManager $manager)
    {
        $this->createMany(Usuarios::class, 20, function(Usuarios $usuario, $count) use($manager) {

            switch(rand(1,2)){
                // Empresa
                case 1:
                    $empresa = new Empresas();

                    $empresa->setNombre("Empresa".$count);
                    $empresa->setCif(123456789 + $count);
                    $empresa->setDireccion("Calle Rocinante n".$count." Las Palmas de Gran Canaria");
                    $empresa->setTelefono(rand(600000000, 999999999));
                    $empresa->setLogo($this->faker->randomElement(self::$logos));

                    $empresa->setUsuario($usuario);
                    $usuario->setRol(1);

                    $manager->persist($empresa);
                    break;

                // Persona
                case 2:
                    $persona = new Personas();

                    $persona->setNombre("Persona".$count);
                    $persona->setTelefono(rand(600000000, 999999999));
                    $persona->setDireccion("Calle Rocinante n".$count." Las Palmas de Gran Canaria");
                    $persona->setApellidos("Apellidos".$count);
                    $persona->setDni(123456789 + $count);
                    $persona->setBiografia("Donec sit amet libero ut diam egestas cursus. Nullam nunc tellus, ornare in augue malesuada, pharetra maximus nulla. Curabitur non urna et erat luctus dictum vitae non mi. Nullam dui urna, dignissim quis varius eu, bibendum at justo. Suspendisse quis vestibulum metus. Aenean pellentesque non orci at pharetra. Integer ante leo, ultrices sed viverra sit amet, dignissim in augue.");

                    $persona->setUsuario($usuario);
                    $usuario->setRol(2);

                    $manager->persist($persona);

            }

            $usuario->setEmail("juanseraar+".$count."@gmail.com");
            $usuario->setPassword("1234");

        });

        $manager->flush();
    }
}
