<?php

namespace App\Controller;

use App\Service\FolderManager;
use App\DOI\AddSubFolderRequest;
use App\Service\SubFolderManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubFolderAddController extends AbstractController
{
    /**
     * @Route("/{server}/add/sub_folder/folder", name="add_subFolder_in_folder")
     */
    public function addSubFolderInFolder(SubFolderManager $subFolderManager, FolderManager $folderManager): Response
    {
        $addSubFolderRequest = new AddSubFolderRequest();

        $addSubFolderRequest->setName($_POST['name']);
        $addSubFolderRequest->setFolder($_POST['folderName']);
        $addSubFolderRequest->setType($_POST['type']);
        $addSubFolderRequest->setLevel($_POST['level']);
        $addSubFolderRequest->setSubFolder($_POST['subFolder']);

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

        $subFolderManager->createFolder($addSubFolderRequest);

        return $this->redirectToRoute('server_dashboard');
    }

    /**
     * @Route("/{server}/add/sub_folder/subFolder", name="add_subFolder_in_subFolder")
     */
    public function addSubFolderInSubFolder(SubFolderManager $subFolderManager, FolderManager $folderManager): Response
    {
        $addSubFolderRequest = new AddSubFolderRequest();

        $addSubFolderRequest->setName($_POST['name']);
        $addSubFolderRequest->setSubFolder($_POST['subFolder']);
        $addSubFolderRequest->setType($_POST['type']);
        $addSubFolderRequest->setLevel($_POST['level']);

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

        $subFolderManager->createInSubFolder($addSubFolderRequest);

        return $this->redirectToRoute('server_dashboard');
    }
}