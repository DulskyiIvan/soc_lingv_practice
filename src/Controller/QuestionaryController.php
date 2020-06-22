<?php

namespace App\Controller;

use App\Entity\Questionary;
use App\Form\QuestionaryType;
use App\Repository\QuestionaryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/questionary")
 */
class QuestionaryController extends AbstractController
{
    /**
     * @Route("/", name="questionary_index", methods={"GET"})
     * @param QuestionaryRepository $questionaryRepository
     * @return Response
     */
    public function index(QuestionaryRepository $questionaryRepository): Response
    {
        return $this->render('questionary/index.html.twig', [
            'questionaries' => $questionaryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="questionary_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $questionary = new Questionary();
        $form = $this->createForm(QuestionaryType::class, $questionary);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($questionary);
            $entityManager->flush();

            return $this->redirectToRoute('questionary_index');
        }

        return $this->render('questionary/new.html.twig', [
            'questionary' => $questionary,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="questionary_show", methods={"GET"})
     * @param Questionary $questionary
     * @return Response
     */
    public function show(Questionary $questionary): Response
    {
        return $this->render('questionary/show.html.twig', [
            'questionary' => $questionary,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="questionary_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Questionary $questionary
     * @return Response
     */
    public function edit(Request $request, Questionary $questionary): Response
    {
        $form = $this->createForm(QuestionaryType::class, $questionary);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questionary_index');
        }

        return $this->render('questionary/edit.html.twig', [
            'questionary' => $questionary,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="questionary_delete", methods={"DELETE"})
     * @param Request $request
     * @param Questionary $questionary
     * @return Response
     */
    public function delete(Request $request, Questionary $questionary): Response
    {
        if ($this->isCsrfTokenValid('delete'.$questionary->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($questionary);
            $entityManager->flush();
        }

        return $this->redirectToRoute('questionary_index');
    }
}
