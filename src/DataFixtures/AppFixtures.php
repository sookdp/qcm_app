<?php

namespace App\DataFixtures;

use App\Entity\Dynamicqcm;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Tableau de thèmes
        $themes = [
            'Mathématiques',
            'Histoire',
            'Géographie',
            'Physique',
            'Biologie',
            'Informatique',
        ];

        // Boucle pour ajouter chaque thème dans la base de données
        foreach ($themes as $theme) {
            $dynamicQcm = new Dynamicqcm();
            $dynamicQcm->setTheme($theme); // Assurez-vous d'avoir un setter pour 'theme'

            $manager->persist($dynamicQcm);
        }

        // Enregistrer dans la base de données
        $manager->flush();
    }
}
