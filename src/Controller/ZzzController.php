<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZzzController extends AbstractController
{
    #[Route('/{rr1}/{rr2}/{rr3}/{rr4}/{rr5}/{rr6}/{rr7}/{rr8}/{rr9}/{rr10}/{rr11}/{rr12}', 
            name: 'default',
            defaults: [
               "rr1" => null,
               "rr2" => null,
               "rr3" => null,
               "rr4" => null,
               "rr5" => null,
               "rr6" => null,
               "rr7" => null,
               "rr8" => null,
               "rr9" => null,
               "rr10" => null,
               "rr11" => null,
               "rr12" => null
            ],
            requirements: ["rr1" => "^[^_].*$"]
    )]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'ZzzController',
        ]);
    }
}      