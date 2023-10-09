<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig');
    }
    #[Route('/produit/afficherproduit', name: 'afficheproduit')]
    public function afficheproduit()
    {
        $preno = "pierre"; $nom="nom";
        return $this->render('/produit/afficherproduit.html.twig',[
            "firstname" => $preno,
            "lastname" => $nom
        ]);
    }
}
