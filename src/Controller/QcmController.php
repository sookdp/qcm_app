<?php

namespace App\Controller;

use App\Repository\DynamicqcmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class QcmController extends AbstractController{
    #[Route('/qcm', name: 'app_qcm')]
    public function index(DynamicqcmRepository $dynamicqcmRepository): Response
        {
            // Récupérer les thèmes depuis la base de données
            $themes = $dynamicqcmRepository->findAllThemes();

            // Envoyer les thèmes à la vue Twig
            return $this->render('qcm/index.html.twig', [
                'themes' => $themes,
            ]);
        }
}
