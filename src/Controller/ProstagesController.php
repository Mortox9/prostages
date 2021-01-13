<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstagesController extends AbstractController
{
    /**
     * @Route("/", name="prostages_accueil")
     */
    public function index(): Response
    {
        return $this->render('prostages/index.html.twig');
    }
    /**
     * @Route("/entreprises", name="prostages_entreprises")
     */
    public function entreprise(): Response
    {
        return $this->render('prostages/entreprises.html.twig');
    }
    /**
     * @Route("/formations", name="prostages_formations")
     */
    public function formation(): Response
    {
        return $this->render('prostages/formations.html.twig');
    }
    /**
     * @Route("/stages", name="prostages_stages")
     */
    public function stages(): Response
    {
        return $this->render('prostages/stages.html.twig');
    }
    /**
     * @Route("/entreprises/{id}", name="prostages_entrepriseId", requirements={"id"="\d{1,4}"})
     */
    public function entrepriseId($id): Response
    {
        return $this->render('prostages/entrepriseId.html.twig',
      [
        'idEntreprise' => $id,
      ]);
    }
    /**
     * @Route("/formations/{id}", name="prostages_formationId", requirements={"id"="\d{1,4}"})
     */
    public function formationId($id): Response
    {
        return $this->render('prostages/formationId.html.twig',
      [
        'idFormation' => $id,
      ]);
    }
    /**
     * @Route("/stages/{id}", name="prostages_stageId", requirements={"id"="\d{1,4}"})
     */
    public function stageId($id): Response
    {
        return $this->render('prostages/stageId.html.twig',
      [
        'idStage' => $id,
      ]);
    }
}
