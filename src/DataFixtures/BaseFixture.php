<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

/**
 * Description of BaseFixture
 *
 * @author Juan Ramírez
 */
abstract class BaseFixture extends Fixture {
	
	private $manager;
	/** @var Generator */
	protected $faker;
	
	abstract protected function creaProyectos(ObjectManager $manager);
    abstract protected function creaUsuarios(ObjectManager $manager);
	
	public function load(ObjectManager $manager){

	    $this->manager = $manager;
		$this->faker = Factory::create();

		$this->creaProyectos($manager);
		$this->creaUsuarios($manager);

	}
	
	protected function createMany(string $className, int $count, callable $factory)
    {
        for ($i = 0; $i < $count; $i++) {
            $entity = new $className();
            $factory($entity, $i);
            $this->manager->persist($entity);
            // store for usage later as App\Entity\ClassName_#COUNT#
            $this->addReference($className . '_' . $i, $entity);
        }
    }
}
