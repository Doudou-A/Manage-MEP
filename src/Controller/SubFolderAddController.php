<?php

namespace App\Controller;

use App\Service\FolderManager;
use App\DOI\AddSubFolderRequest;
use App\Service\SubFolderManager;
use App\Repository\FolderRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubFolderAddController extends AbstractController
{
    /**
     * @Route("/{server}/add/sub_folder/folder", name="add_subFolder_in_folder")
     */
    public function addSubFolderInFolder(FolderRepository $repoFolder, SubFolderManager $subFolderManager, FolderManager $folderManager): Response
    {
        $addSubFolderRequest = new AddSubFolderRequest();

        $addSubFolderRequest->setName($_POST['name']);
        $addSubFolderRequest->setType($_POST['type']);
        $addSubFolderRequest->setOnFolder($_POST['onFolder']);

        $aJsId = $folderManager->getArrayJsId();

        foreach ($aJsId as $jsId) {
            if ($jsId['MAX(f.js_id)'] > $jsId['MAX(sf.js_id)']) $jsIdMax = $jsId['MAX(f.js_id)'];
            else $jsIdMax = $jsId['MAX(sf.js_id)'];
        }
        if (!$jsIdMax) {
            $jsId = $folderManager->getJsIdMax();
            $jsIdMax = $jsId[0]['MAX(f.js_id)'];
        }

        $addSubFolderRequest->setJsId($jsIdMax);

        $subFolder = $subFolderManager->createInFolder($addSubFolderRequest);

        return new JsonResponse([
            'html' => $this->renderView('subFolder/newSubFolder.html.twig', [
                'subFolder' => $subFolder,
            ])
        ]);
        /* return $this->redirectToRoute('server_dashboard'); */
    }

    /**
     * @Route("/{server}/add/sub_folder/subFolder", name="add_subFolder_in_subFolder")
     */
    /* public function addSubFolderInSubFolder(SubFolderManager $subFolderManager, FolderManager $folderManager): Response
    {
        $addSubFolderRequest = new AddSubFolderRequest();

        $addSubFolderRequest->setName($_POST['name']);
        $addSubFolderRequest->setType($_POST['type']);
        $addSubFolderRequest->setOnFolder($_POST['onFolder']);

        $aJsId = $folderManager->getArrayJsId();

        foreach ($aJsId as $jsId) {
            if ($jsId['MAX(f.js_id)'] > $jsId['MAX(sf.js_id)']) $jsIdMax = $jsId['MAX(f.js_id)'];
            else $jsIdMax = $jsId['MAX(sf.js_id)'];
        }
        if (!$jsIdMax) {
            $jsId = $folderManager->getJsIdMax();
            $jsIdMax = $jsId[0]['MAX(f.js_id)'];
        }
        $addSubFolderRequest->setJsId($jsIdMax);

        $subFolder = $subFolderManager->createInSubFolder($addSubFolderRequest);

        return new JsonResponse([
            'html' => $this->renderView('subFolder/newSubFolder.html.twig', [
                'subFolder' => $subFolder,
            ])
        ]);
        /* 
        return $this->redirectToRoute('server_dashboard');  
    } */
}
