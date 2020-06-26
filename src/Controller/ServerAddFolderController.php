<?php

namespace App\Controller;

use App\Form\FolderType;
use App\Service\FolderManager;
use App\DOI\ServerAddFolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServerAddFolderController extends AbstractController
{
    /**
     * @Route("/server/add/folder/{server}", name="server_add_folder")
     */
    public function index(Request $request, FolderManager $folderManager): Response
    {
        $serverAddFolderRequest = new ServerAddFolderRequest;

        $form = $this->createForm(FolderType::class, $serverAddFolderRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //Ajoût du folder en bdd
            $folder = $folderManager->createFolder($serverAddFolderRequest);

            //Ajoût du script JS dans le fichier app.js
            $name = $folder->getName();
            $app = fopen(__DIR__.'/../../assets/js/app.js', 'a+');
            fputs($app, "
            new Vue({
                el:'#$name',
                data:{
                    seen: true
                }
                });");

            return $this->redirectToRoute('server_dashboard');
        }

        return $this->render('server_dashboard/index.html.twig', [
            'controller_name' => 'ServerAddFolderController',
        ]);
    }
}
