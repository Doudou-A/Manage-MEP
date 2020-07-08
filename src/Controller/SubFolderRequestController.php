<?php

namespace App\Controller;

use App\Repository\FolderRepository;
use App\Repository\SubFolderRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubFolderRequestController extends AbstractController
{
    /**
     * @Route("/sub_folder/{id}/request", name="sub_folder_request")
     */
    public function subFolderRequest($id, FolderRepository $repoFolder, SubFolderRepository $repoSubFolder): Response
    {
        /* folder = $repoFolder->findOneByJsId($id);

        if($folder){
            $listSubFolder = $repoSubFolder->findList($folder->getId());
            $server = 'dev';
        }else{
            $subFolder = $repoSubFolder->findOneByJsId($id);
            $listSubFolder = $repoSubFolder->findList($subFolder->getId());
            $server = 'dev';
        } */
        $listSubFolder = $repoSubFolder->findList($id);
        $server = 'dev';

        return new JsonResponse([
            'html' => $this->renderView('subFolder/ajaxRequest.html.twig', [
                'listSubFolder' => $listSubFolder,
                'server' => $server,
            ])
        ]);
    }
}
