<?php

namespace App\Infra\Blog\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path:'/')]
class Home
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        return new Response('home');
    }
}