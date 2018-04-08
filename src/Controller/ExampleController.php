<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExampleController extends Controller
{
    /**
     * @Route("/example", name="example_index")
     */
    public function index()
    {
        return $this->render('example/index.html.twig', [
            'controller_name' => 'ExampleController',
        ]);
    }
}
