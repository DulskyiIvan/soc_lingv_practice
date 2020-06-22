<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    /**
     * @Route("/report/1", name="1")
     */
    public function index()
    {
        return $this->render('report/index.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }

    /**
     * @Route("/report/2", name="2")
     */
    public function index2()
    {
        return $this->render('report/index2.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }

    /**
     * @Route("/report/3", name="3")
     */
    public function index3()
    {
        return $this->render('report/index3.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }
}
