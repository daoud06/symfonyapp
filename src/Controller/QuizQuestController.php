<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizQuestController extends AbstractController
{
    /**
     * @Route("/home", name="login")
     */
    public function index(): Response
    {
        return $this->render('quiz_quest/index.html.twig', [
            'controller_name' => 'QuizQuestController',
        ]);
    }
}
