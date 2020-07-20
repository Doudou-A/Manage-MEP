<?php

namespace App\Controller;

use App\Entity\Project;
use App\Repository\ProjectRepository;
use App\Repository\SubFolderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubFolderAddToProjectController extends AbstractController
{
    /**
     * @Route("/Sub-Folder/{jsId}/Add-To-Project/{id}", name="sub_folder_add_to_project")
     */
    public function index($jsId, $id, ProjectRepository $repoProject, SubFolderRepository $repoSubFolder, EntityManagerInterface $manager)
    {
        $project = $repoProject->find($id);
        $subFolder = $repoSubFolder->findOneByJsId($jsId);

        // $subFolder->setProject($project);
        $subFolder->addProject($project);

        $manager->persist($subFolder);
        $manager->flush();
        
        return new JsonResponse($subFolder->getOnFolder());
    }
}
