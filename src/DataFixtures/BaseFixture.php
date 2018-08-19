<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of BaseFixture
 *
 * @author Juan Ramírez
 */
abstract class BaseFixture extends Fixture {
	
	private $manager;
	
	abstract protected function loadData(ObjectManager $manager);
	
	public function load(ObjectManager $manager){
		$this->manager = $manager;
		$this->loadData($manager);
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
