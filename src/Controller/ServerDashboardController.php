<?php

namespace App\Controller;

use App\Form\FolderType;
use App\DOI\ServerAddFolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServerDashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="server_dashboard")
     */
    public function index(Request $request):Response
    {
        
        $serverAddFolderRequest = new ServerAddFolderRequest;

        $form = $this->createForm(FolderType::class, $serverAddFolderRequest);
        $form->handleRequest($request);

        return $this->render('server_dashboard/index.html.twig', [
            'form' => $form->createView(),
            'server' => 'dev',
        ]);
    }
}
