<?php

namespace App\Controller;

use App\Entity\Planning;
use DateTime;
use App\Repository\PlanningRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\Date;

class PlanningController extends AbstractController
{
    /**
     * @Route("/planning", name="planning")
     */
    public function index(): Response
    {
        return $this->render('planning/index.html.twig', [
            'controller_name' => 'PlanningController',
        ]);
    }

    /**
     * @Route("/construction", name="construction")
     */
    public function construction(PlanningRepository $PlanningRepository,EntityManagerInterface $manager): Response
    {
        $planning = new Planning();
        $planning->ConstructionDesJours(new DateTime("2021-11-11"),(new DateTime("2021-11-20"))) ;        

        $planning->ConstructionDesheures(new DateTime("2021-11-11 08:00:00"),(new DateTime("2021-11-11 20:00:00"))) ;        

        return $this->render('planning/construction.html.twig', [ 
            'lesjours' => $planning->getLesjours(),
            'lesheures' => $planning->getLesheures(),

            
        ]);
    }

        /**
     * @Route("/gestionCategories/{param1}/{param2}", name="gestionCategories")
     * @ParamConverter("date", options={"format": "Y-m-d"})
     */
    public function gestionCategories(DateTime $param1,DateTime $param2,PlanningRepository $PlanningRepository,EntityManagerInterface $manager): Response
    {
        return $this->render('planning/construction.html.twig'

            
    );
    }

}
