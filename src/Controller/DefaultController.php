<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'blogs' => $blogRepository->findBy(['published' => true]),
        ]);
    }
}
