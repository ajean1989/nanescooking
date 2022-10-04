<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Profil extends AbstractController
{
    #[Route('/profil', name: 'profil')]
    public function mainView(): Response
    {
        return $this->render('profil.html.twig');
    }
}