<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProduitController extends AbstractController
{

    use EntityManagerTrait;
    /**
     * @Route("/produit/{id}", name="show")
     */
    public function show(int $id): Response
    {


        $product = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'Pas de produit trouvé pour cet id ' . $id
            );
        }
        return $this->render('base.html.twig', [
            'produit_titre' => $product->getTitre(),
            'produit_description' => $product->getDescription()
        ]);
        // return new Response(
        //     '<html><h1> Le résultat est </h1><body>Lucky number: ' . $product->getTitre() . '</body></html>'
        // );

    }
}
