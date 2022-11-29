<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController
{
    #[Route('/blog/posttt', name: 'posttt')]
    public function index(): Response
    {
        return $this->render('blog/aff.html.twig');
    }






}
