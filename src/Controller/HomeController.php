<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Form;
use App\Form\FormulaireArchiType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, ManagerRegistry $ManagerRegistry): Response
    {
        $produit = new Form();
        $form = $this->createForm(FormulaireArchiType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager = $ManagerRegistry->getManager();
            $manager->persist($produit);
            $manager->flush();
            return $this->redirectToRoute("app_home");

        }

        return $this->render('/produit/index.html.twig',[
            "produit" => $produit,
            'formulaire' =>$form->createView()
        ]);

    }
}


