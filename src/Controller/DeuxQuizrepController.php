<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeuxQuizrepController extends AbstractController
{

  #
     /**
     * @Route("deux_quizrep", name="deux_quizrep")
     */


    #[Route('/deux/quizrep', name: 'deux_quizrep')]
    public function index(): Response
    {
        return $this->render('deux_quizrep/index.html.twig', [
            'controller_name' => 'DeuxQuizrepController',
        ]);
    }
}
