<?php

namespace App\Domain\Blog\Entity;

class Article
{

    public function __construct(     public string $titre,
                                     public \DateTime $datePublication,
                                     public string $contenu,
                                     public string $auteur)
    {

    }




}