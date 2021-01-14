<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Entreprise;
use App\Entity\Formation;
use App\Entity\Stage;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $entrepriseTest= new Entreprise();
        $entrepriseTest->setNom("Safran");
        $entrepriseTest->setAdresse("Avenue du 1er Mai");
        $entrepriseTest->setMilieu("Aéronotique");
        $entrepriseTest->setTelephone("05 59 74 40 00");
        $entrepriseTest->setPhoto("https://www.safran-helicopter-engines.com/sites/turbomeca/files/styles/landscape_large/public/thumbnails/image/usine_tarnos_01.jpg?itok=-abUxRz_");
        $manager->persist($entrepriseTest);
        $manager->flush();
    }
}
