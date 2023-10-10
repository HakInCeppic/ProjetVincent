<?php

namespace App\DataFixtures;
use Faker\Factory;
use App\entity\TabProduit;
use App\entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class ProduitFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for($i = 0; $i<5;$i++){
            
            $produit = new TabProduit();
            $produit->setNomProduit($faker->firstName);
            $produit->setCategorie($faker->firstName);
            $manager->persist($produit);

            $service = new Service();
            $service->setMonService($faker->firstName);
            $service->setDateCreation(date($format = 'Y-m-d'));
            $service->setLogo("https://picsum.photos/id/237/200/300");
            $manager->persist($service);
        
        }
        $manager->flush();

    }
}
