<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConferenceController extends AbstractController
{
    #[Route('/', name: 'app_conference')]
    public function index(): Response
    {
        return new Response(<<<EOF
            <html lang="pt-BR">
                <body>
                    <img alt="Under construction" src="/images/under-construction.gif" />
                </body>
            </html>
        EOF);
    }
}
