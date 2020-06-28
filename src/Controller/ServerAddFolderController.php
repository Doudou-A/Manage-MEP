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

            $aJsId = $folderManager->getJsIds();
            foreach ($aJsId as $jsId) {
                if ($jsId['MAX(f.js_id)'] > $jsId['MAX(sf.js_id)']) $jsIdMax = $jsId['MAX(f.js_id)'];
                else $jsIdMax = $jsId['MAX(sf.js_id)'];
            }
            dd($jsIdMax);
            //Ajoût du folder en bdd
            $folderManager->createFolder($serverAddFolderRequest, $jsIdMax);

            return $this->redirectToRoute('server_dashboard');
        }

        return $this->render('server_dashboard/index.html.twig', [
            'controller_name' => 'ServerAddFolderController',
        ]);
    }
}
