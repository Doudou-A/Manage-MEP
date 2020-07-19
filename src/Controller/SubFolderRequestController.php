<?php

namespace App\Controller;

use App\Repository\FolderRepository;
use App\Repository\ProjectRepository;
use App\Repository\SubFolderRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubFolderRequestController extends AbstractController
{
    /**
     * @Route("/sub_folder/{id}/request/{project}", name="sub_folder_request")
     */
    public function subFolderRequest($id, $project=null, FolderRepository $repoFolder, SubFolderRepository $repoSubFolder, ProjectRepository $repoProject): Response
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
        if(isset($project)) $project = $repoProject->find($project);
        $server = 'dev';

        return new JsonResponse([
            'html' => $this->renderView('subFolder/ajaxRequest.html.twig', [
                'listSubFolder' => $listSubFolder,
                'project' => $project,
                'server' => $server,
                'jsId' => $id,
            ])
        ]);
    }
}
