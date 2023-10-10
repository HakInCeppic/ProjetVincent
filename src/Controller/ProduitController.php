<?php

namespace App\Controller;

use App\Repository\TabProduitRepository;
use App\Repository\ServiceRepository;
use App\Entity\TabProduit;
use App\Form\ProductType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\ManagerRegistry as DoctrineManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'produit')]
    public function index(TabProduitRepository $TabProduitRepository): Response
    {
        $prods = $TabProduitRepository->findAll();
        return $this->render('produit/index.html.twig',[
            'prods' => $prods
        ]);
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

    #[Route('/produit/afficheservice', name: 'afficheservice')]
    public function afficheservice(ServiceRepository $service)
    {
        $service = $service->findAll();
        return $this->render('/produit/afficheservice.html.twig',[
            
            "services" => $service,
        ]);
    }

    #[Route('/produit/ajout', name:"ajout")]
    public function ajoutProduit(Request $request, ManagerRegistry $ManagerRegistry){
        $produit = new TabProduit();
        $form = $this->createForm(ProductType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager = $ManagerRegistry = $ManagerRegistry->getManager();
            $manager->persist($produit);
            $manager->flush();
            return $this->redirectToRoute("produit");

        }
        return $this->render('/produit/ajout.html.twig',[
            "produit" => $produit,
            'formulaire' =>$form->createView()
        ]);

    }
    
}
