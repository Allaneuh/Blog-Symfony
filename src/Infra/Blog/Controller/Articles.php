<?php

namespace App\Infra\Blog\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Domain\Blog\Entity\Article;
use Twig\Environment;

#[Route('/articles')]
class Articles
{
    public function __construct(private Environment $twig)
    {

    }

    public function __invoke()
    {
        $today = new \DateTime();
        $articles = [
            new Article(titre:'Article 1',
                        contenu:'Contenu de l\'article 1',
                        auteur:'Auteur 1',
                        datePublication: $today),
        ];
     return new Response($this->twig->render('blog/articles.html.twig', [
            'articles' => $articles
        ]));
    }
}