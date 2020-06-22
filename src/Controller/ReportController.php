<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

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
    /**
     * @Route("/report/", name="report")
     */
    public function show()
    {
        return $this->render('report/show.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }/**
     * @Route("/report/pdf", name="pdf")
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
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
}
