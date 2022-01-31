<?php

namespace App\Controller;

use App\Entity\Voitures;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoituresController extends AbstractController
{
    public function __construct(){

    }
    public function __invoke(Voitures $Voitures):Voitures
    {
        dd($Voitures);
    }
}