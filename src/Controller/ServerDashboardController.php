<?php

namespace App\Controller;

use App\Form\FolderType;
use App\Form\SubFolderType;
use App\Service\FolderManager;
use App\Service\ProjectManager;
use App\DOI\AddSubFolderRequest;
use App\Service\SubFolderManager;
use App\DOI\ServerAddFolderRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServerDashboardController extends AbstractController
{
    /**
     * @Route("/dashboard/{project}", name="server_dashboard")
     */
    public function dashboard($project = null, FolderManager $folderManager, SubFolderManager $subFolderManager, ProjectManager $projectManager, Request $request): Response
    {
        $allFolder = $folderManager->getAll();
        $serverAddFolderRequest = new ServerAddFolderRequest;
        $form = $this->createForm(FolderType::class, $serverAddFolderRequest);
        $form->handleRequest($request);

        $allSubFolder = $subFolderManager->getAll();
        $AddSubFolderRequest = new AddSubFolderRequest;
        $form_subFolder = $this->createForm(SubFolderType::class, $AddSubFolderRequest);
        $form_subFolder->handleRequest($request);

        /* $user = $this->getUser();

        $projects = $projectManager->getAllByUser($user->getId()); */
        $projects = $projectManager->getAll();

        return $this->render('server_dashboard/index.html.twig', [
            'form' => $form->createView(),
            'folders' => $allFolder,
            'subFolders' => $allSubFolder,
            'form_subFolder' => $form_subFolder->createView(),
            'projects' => $projects,
            'server' => 'dev',
        ]);
    }
}
