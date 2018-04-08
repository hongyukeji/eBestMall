<?php

namespace App\Controller;

use App\Entity\Express;
use App\Form\ExpressType;
use App\Repository\ExpressRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/express")
 */
class ExpressController extends Controller
{
    /**
     * @Route("/", name="express_index", methods="GET")
     */
    public function index(ExpressRepository $expressRepository): Response
    {
        return $this->render('express/index.html.twig', ['expresses' => $expressRepository->findAll()]);
    }

    /**
     * @Route("/new", name="express_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $express = new Express();
        $form = $this->createForm(ExpressType::class, $express);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($express);
            $em->flush();

            return $this->redirectToRoute('express_index');
        }

        return $this->render('express/new.html.twig', [
            'express' => $express,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="express_show", methods="GET")
     */
    public function show(Express $express): Response
    {
        return $this->render('express/show.html.twig', ['express' => $express]);
    }

    /**
     * @Route("/{id}/edit", name="express_edit", methods="GET|POST")
     */
    public function edit(Request $request, Express $express): Response
    {
        $form = $this->createForm(ExpressType::class, $express);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('express_edit', ['id' => $express->getId()]);
        }

        return $this->render('express/edit.html.twig', [
            'express' => $express,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="express_delete", methods="DELETE")
     */
    public function delete(Request $request, Express $express): Response
    {
        if ($this->isCsrfTokenValid('delete'.$express->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($express);
            $em->flush();
        }

        return $this->redirectToRoute('express_index');
    }
}
