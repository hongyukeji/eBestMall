<?php

namespace App\Controller;

use App\Entity\Config;
use App\Form\ConfigType;
use App\Repository\ConfigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/config")
 */
class ConfigController extends Controller
{
    /**
     * @Route("/", name="config_index", methods="GET")
     */
    public function index(ConfigRepository $configRepository): Response
    {
        return $this->render('config/index.html.twig', ['configs' => $configRepository->findAll()]);
    }

    /**
     * @Route("/new", name="config_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $config = new Config();
        $form = $this->createForm(ConfigType::class, $config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($config);
            $em->flush();

            return $this->redirectToRoute('config_index');
        }

        return $this->render('config/new.html.twig', [
            'config' => $config,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="config_show", methods="GET")
     */
    public function show(Config $config): Response
    {
        return $this->render('config/show.html.twig', ['config' => $config]);
    }

    /**
     * @Route("/{id}/edit", name="config_edit", methods="GET|POST")
     */
    public function edit(Request $request, Config $config): Response
    {
        $form = $this->createForm(ConfigType::class, $config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('config_edit', ['id' => $config->getId()]);
        }

        return $this->render('config/edit.html.twig', [
            'config' => $config,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="config_delete", methods="DELETE")
     */
    public function delete(Request $request, Config $config): Response
    {
        if ($this->isCsrfTokenValid('delete'.$config->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($config);
            $em->flush();
        }

        return $this->redirectToRoute('config_index');
    }
}
