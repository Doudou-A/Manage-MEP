<?php

namespace App\Controller;

use App\Entity\Folder;
use App\Repository\SubFolderRepository;
use App\Service\SubFolderManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubFolderRequestController extends AbstractController
{
    /**
     * @Route("/sub_folder/{id}/request", name="sub_folder_request")
     */
    public function subFolderRequest(Folder $folder, Request $request, SubFolderManager $subFolderManager, SubFolderRepository $repo) : Response
    {
        $listSubFolder = $repo->findListByFolder($folder->getId());
        $server = 'dev';

        return new JsonResponse([
            'html' => $this->renderView('subFolder/ajaxRequest.html.twig', [
            'listSubFolder' => $listSubFolder,
            'server' => $server,
        ])
        ]);
    }
}
