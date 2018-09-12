<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Usuarios;
use App\Entity\Empresas;
use App\Entity\Personas;

class UsuariosFixture extends BaseFixture
{
    private static $logos = ["logo1.jpg", "logo2.jpg", "logo3.jpg", "logo4.jpg", "logo5.jpg"];

    protected function loadData(ObjectManager $manager)
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
                    $usuario->setRoles(['ROLE_USER, ROLE_EMPRESA']);

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
                    $usuario->setRoles(['ROLE_USER, ROLE_PERSONA']);

                    $manager->persist($persona);

            }

            $usuario->setEmail("juanseraar+".$count."@gmail.com");

            $clave = $this->encoder->encodePassword($usuario, 'Sostenibles');
            $usuario->setPassword($clave);

        });

        $manager->flush();
    }
}
