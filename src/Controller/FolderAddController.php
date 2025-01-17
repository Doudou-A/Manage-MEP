<?php

namespace App\Controller;

use App\Entity\Server;
use App\Form\FolderType;
use App\Service\FolderManager;
use App\DOI\ServerAddFolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FolderAddController extends AbstractController
{
    /**
     * @Route("/{id}/add/folder", name="add_folder")
     */
    public function addFolder(Server $server, Request $request, FolderManager $folderManager): Response
    {
        $serverAddFolderRequest = new ServerAddFolderRequest;

        $form = $this->createForm(FolderType::class, $serverAddFolderRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $aJsId = $folderManager->getArrayJsId();
            foreach ($aJsId as $jsId) {
                if ($jsId['MAX(f.js_id)'] > $jsId['MAX(sf.js_id)']) $jsIdMax = $jsId['MAX(f.js_id)'];
                else $jsIdMax = $jsId['MAX(sf.js_id)'];
            }
            if(!$jsIdMax){
                $jsId = $folderManager->getJsIdMax();
                $jsIdMax = $jsId[0]['MAX(f.js_id)'];
            }
            //Ajoût du folder en bdd
            $folderManager->createFolder($serverAddFolderRequest, $jsIdMax, $server);

            return $this->redirectToRoute('server_dashboard', ['slug' => $server->getSlug()]);
        }

        return $this->render('server_dashboard/index.html.twig', [
            'controller_name' => 'ServerAddFolderController',
        ]);
    }
}
