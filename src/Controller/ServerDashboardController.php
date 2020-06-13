<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServerDashboardController extends AbstractController
{
    /**
     * @Route("/server/dashboard", name="server_dashboard")
     */
    public function index()
    {
        return $this->render('server_dashboard/index.html.twig', [
            'controller_name' => 'ServerDashboardController',
        ]);
    }
}
