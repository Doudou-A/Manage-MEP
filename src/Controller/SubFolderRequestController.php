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
        $folder = $repoFolder->findOneByJsId($id);

        $listSubFolder = $repoSubFolder->findListByJsId($folder->getJsId());
        $server = 'dev';
        dd($listSubFolder);
        $listSubFolder = $repoSubFolder->findListBySubFolder($id);
        $server = 'dev';

        return new JsonResponse([
            'html' => $this->renderView('subFolder/ajaxRequest.html.twig', [
                'listSubFolder' => $listSubFolder,
                'server' => $server,
            ])
        ]);
    }
}
