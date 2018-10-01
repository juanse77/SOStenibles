<?php
/**
 * Created by PhpStorm.
 * User: Juan Ramírez
 * Date: 01/10/2018
 * Time: 19:41
 */

namespace App\DataFixtures;


use App\Entity\Apadrinamientos;
use App\Entity\Proyectos;
use App\Entity\Usuarios;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ApadrinamientosFixture extends BaseFixture implements DependentFixtureInterface
{

    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(Apadrinamientos::class, 40, function(Apadrinamientos $apadrinamientos, $count) use($manager) {
            $apadrinamientos->setUsuario($this->getReference(Usuarios::class.'_'. rand(0, 5)));
            $apadrinamientos->setProyecto($this->getReference(Proyectos::class.'_'. rand(0,19)));
            $apadrinamientos->setEstado(rand(0,2));
        });

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            UsuariosFixture::class,
            ProyectosFixture::class
            ];
    }
}