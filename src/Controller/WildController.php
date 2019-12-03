<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class WildController extends AbstractController
{
    /**
     * @Route("wild/show/{slug}", name="wild_show", requirements={"slug"="[a-z0-9\-]+"}, defaults={"slug"=null})
     * @return  \Symfony\Component\HttpFoundation\Response;
     */
    public function show($slug)
    {
        if (null === $slug) {
            $newSlug= 'Aucune série sélectionnée, veuillez choisir une série';
        } else {
          $newSlug = str_replace('-', ' ', $slug);
          $newSlug= ucwords($newSlug);
       }

        return $this->render('home.html.twig', ['slug' => $newSlug]);
    }

}