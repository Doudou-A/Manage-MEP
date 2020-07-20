<?php

namespace App\Controller;

use App\Form\ProjectType;
use App\Service\ProjectManager;
use App\DOI\ProjectCreateRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectCreateController extends AbstractController
{
    /**
     * @Route("/Project/Create", name="project_create")
     */
    public function index(ProjectManager $projectManager, Request $request)
    {
        $user = $this->getUser();
        
        $ProjectCreateRequest = new ProjectCreateRequest;
        
        $form = $this->createForm(ProjectType::class, $ProjectCreateRequest);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $projectManager->createProject($ProjectCreateRequest, $user);
            return $this->redirectToRoute('home');
        }

        return $this->render('project_create/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
