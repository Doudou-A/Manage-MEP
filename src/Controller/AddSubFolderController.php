<?php

namespace App\Controller;

use App\DOI\AddSubFolderRequest;
use App\Service\SubFolderManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddSubFolderController extends AbstractController
{
    /**
     * @Route("/server/add/sub_folder/{server}", name="server_add_subFolder")
     */
    public function index(SubFolderManager $subFolderManager): Response
    {
        $addSubFolderRequest = new AddSubFolderRequest();

        $addSubFolderRequest->setName($_POST['name']);
        $addSubFolderRequest->setFolder($_POST['folderName']);
        $addSubFolderRequest->setType($_POST['type']);
        $addSubFolderRequest->setLevel($_POST['level']);
        $addSubFolderRequest->setSubFolder1($_POST['subFolder_1']);

        $subFolderManager->createFolder($addSubFolderRequest);

        return $this->redirectToRoute('server_dashboard');
    }
}
