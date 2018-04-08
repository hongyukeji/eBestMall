<?php

namespace App\Controller;

use App\Entity\Goods;
use App\Form\GoodsType;
use App\Repository\GoodsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/goods")
 */
class GoodsController extends Controller
{
    /**
     * @Route("/", name="goods_index", methods="GET")
     */
    public function index(GoodsRepository $goodsRepository): Response
    {
        return $this->render('goods/index.html.twig', ['goods' => $goodsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="goods_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $good = new Goods();
        $form = $this->createForm(GoodsType::class, $good);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($good);
            $em->flush();

            return $this->redirectToRoute('goods_index');
        }

        return $this->render('goods/new.html.twig', [
            'good' => $good,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="goods_show", methods="GET")
     */
    public function show(Goods $good): Response
    {
        return $this->render('goods/show.html.twig', ['good' => $good]);
    }

    /**
     * @Route("/{id}/edit", name="goods_edit", methods="GET|POST")
     */
    public function edit(Request $request, Goods $good): Response
    {
        $form = $this->createForm(GoodsType::class, $good);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('goods_edit', ['id' => $good->getId()]);
        }

        return $this->render('goods/edit.html.twig', [
            'good' => $good,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="goods_delete", methods="DELETE")
     */
    public function delete(Request $request, Goods $good): Response
    {
        if ($this->isCsrfTokenValid('delete'.$good->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($good);
            $em->flush();
        }

        return $this->redirectToRoute('goods_index');
    }
}
