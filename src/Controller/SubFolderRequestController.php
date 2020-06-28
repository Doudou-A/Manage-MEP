<?php

namespace App\Controller;

use App\Entity\Folder;
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
    public function subFolderRequest(Folder $folder, Request $request, SubFolderManager $subFolderManager) : Response
    {
        $listSubFolder = $subFolderManager->findListByFolder($folder);

        return $this->json(['code' => 200, 'message' => 'récupération', 'subFolder' => $listSubFolder]);
    }
}
