<?php

namespace App\Controller;

use App\Entity\Store;
use App\Form\StoreType;
use App\Repository\StoreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/store")
 */
class StoreController extends Controller
{
    /**
     * @Route("/", name="store_index", methods="GET")
     */
    public function index(StoreRepository $storeRepository): Response
    {
        return $this->render('store/index.html.twig', ['stores' => $storeRepository->findAll()]);
    }

    /**
     * @Route("/new", name="store_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $store = new Store();
        $form = $this->createForm(StoreType::class, $store);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($store);
            $em->flush();

            return $this->redirectToRoute('store_index');
        }

        return $this->render('store/new.html.twig', [
            'store' => $store,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="store_show", methods="GET")
     */
    public function show(Store $store): Response
    {
        return $this->render('store/show.html.twig', ['store' => $store]);
    }

    /**
     * @Route("/{id}/edit", name="store_edit", methods="GET|POST")
     */
    public function edit(Request $request, Store $store): Response
    {
        $form = $this->createForm(StoreType::class, $store);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('store_edit', ['id' => $store->getId()]);
        }

        return $this->render('store/edit.html.twig', [
            'store' => $store,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="store_delete", methods="DELETE")
     */
    public function delete(Request $request, Store $store): Response
    {
        if ($this->isCsrfTokenValid('delete'.$store->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($store);
            $em->flush();
        }

        return $this->redirectToRoute('store_index');
    }
}
