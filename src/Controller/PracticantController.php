<?php

namespace App\Controller;

use App\Entity\Practicant;
use App\Form\PracticantType;
use App\Repository\PracticantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/practicant")
 */
class PracticantController extends AbstractController
{
    /**
     * @Route("/", name="practicant_index", methods={"GET"})
     * @param PracticantRepository $practicantRepository
     * @return Response
     */
    public function index(PracticantRepository $practicantRepository): Response
    {
        return $this->render('practicant/index.html.twig', [
            'practicants' => $practicantRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="practicant_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $practicant = new Practicant();
        $form = $this->createForm(PracticantType::class, $practicant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($practicant);
            $entityManager->flush();

            return $this->redirectToRoute('practicant_index');
        }

        return $this->render('practicant/new.html.twig', [
            'practicant' => $practicant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="practicant_show", methods={"GET"})
     * @param Practicant $practicant
     * @return Response
     */
    public function show(Practicant $practicant): Response
    {
        return $this->render('practicant/show.html.twig', [
            'practicant' => $practicant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="practicant_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Practicant $practicant
     * @return Response
     */
    public function edit(Request $request, Practicant $practicant): Response
    {
        $form = $this->createForm(PracticantType::class, $practicant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('practicant_index');
        }

        return $this->render('practicant/edit.html.twig', [
            'practicant' => $practicant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="practicant_delete", methods={"DELETE"})
     * @param Request $request
     * @param Practicant $practicant
     * @return Response
     */
    public function delete(Request $request, Practicant $practicant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$practicant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($practicant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('practicant_index');
    }
}
