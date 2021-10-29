<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestrepController extends AbstractController
{
    #
     /**
     * @Route("quizz/{id}", name="questrep")
     */
    public function index(): Response
    {
        
        return $this->render('questrep/index.html.twig', [
            'controller_name' => 'QuestrepController',
        ]);

        
    }


    
}






?>