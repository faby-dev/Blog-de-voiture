<?php

namespace App\Controller;

use App\Entity\Voitures;
use App\Repository\VoituresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig');
    }
    #[Route('/voitures/{id}', name: 'show_voitures')]
    public function show($id, VoituresRepository $Vrepo):Response
    {
        $Voitures = $Vrepo->find($id);
        return $this->render("voitures/show.html.twig", ["voitures"=> $Voitures]);
    }
}
