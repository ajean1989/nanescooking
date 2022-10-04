<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Settings extends AbstractController
{
    #[Route('/recipe', name: 'recipe')]
    public function mainView(): Response
    {
        return $this->render('recipe.html.twig');
    }
}