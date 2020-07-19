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
     * @Route("/Sub-Folder/{id}/request/{project}", name="sub_folder_request")
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
        $allSubFolder = $repoSubFolder->findList($id);
        if($project == "null") $listId = null;
        if($project !== "null"){
            $projectCollection = $project->getSubFolders();
            $listSubFolder = $projectCollection->getValues();
            $listId = [];
            foreach($listSubFolder as $subFolder){
                $listId[] = $subFolder->getId();
            }
        } 

        $server = 'dev';

        return new JsonResponse([
            'html' => $this->renderView('subFolder/ajaxRequest.html.twig', [
                'allSubFolder' => $allSubFolder,
                'listId' => $listId,
                'project' => $project,
                'server' => $server,
                'jsId' => $id,
            ])
        ]);
    }
}
