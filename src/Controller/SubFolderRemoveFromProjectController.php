<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use App\Repository\SubFolderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubFolderRemoveFromProjectController extends AbstractController
{
    /**
     * @Route("/subFolder/{jsId}/removeFromProject/{id}", name="sub_folder_remove_from_project")
     */
    public function index($jsId, $id, ProjectRepository $repoProject, SubFolderRepository $repoSubFolder, EntityManagerInterface $manager)
    {
        $project = $repoProject->find($id);
        $subFolder = $repoSubFolder->findOneByJsId($jsId);

        $subFolder->setProject(null);

        $manager->persist($subFolder);
        $manager->flush();

        return new JsonResponse($subFolder->getOnFolder());
    }
}
