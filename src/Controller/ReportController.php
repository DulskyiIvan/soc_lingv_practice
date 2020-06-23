<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class ReportController extends AbstractController
{
    /**
     * @Route("/report1/", name="report1")
     */
    public function index()
    {
        $s = 'report/show.html.twig';
        return $this->render('report/index.html.twig', [
            'controller_name' => 'ReportController',
            's'=>$s
        ]);
    }

    /**
     * @Route("/report2", name="report2")
     */
    public function index2()
    {
        return $this->render('report/index2.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }

    /**
     * @Route("/report3", name="report3")
     */
    public function index3()
    {
        return $this->render('report/index3.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }
    /**
     * @Route("/report/", name="report")
     */
    public function show()
    {
        return $this->render('report/show.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }

    /**
     * @Route("/reportpdf1/", name="pdf1")
     */
    public function createPDF()
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'dejavu sans');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('report/index.html.twig', [
            'title' => "Welcome to our PDF Test"
        ]);

        $html .= '<link type="text/css" href="/public/report.css" rel="stylesheet" />';
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Зведена таблиця №1.pdf", [
            "Attachment" => true
        ]);
    }/**
     * @Route("/reportpdf2/", name="pdf2")
     */
    public function createPDF2()
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'dejavu sans');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('report/index2.html.twig', [
            'title' => "Welcome to our PDF Test"
        ]);

        $html .= '<link type="text/css" href="/public/report.css" rel="stylesheet" />';
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Зведена таблиця №2.pdf", [
            "Attachment" => true
        ]);
    }/**
     * @Route("/reportpdf3/", name="pdf3")
     */
    public function createPDF3()
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'dejavu sans');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('report/index3.html.twig', [
            'title' => "Welcome to our PDF Test"
        ]);

        $html .= '<link type="text/css" href="/public/report.css" rel="stylesheet" />';
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Зведена таблиця №3.pdf", [
            "Attachment" => true
        ]);
    }
}
