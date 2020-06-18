<?php

namespace App\Controller;

use App\Form\FolderType;
use App\Form\SubFolderType;
use App\DOI\AddSubFolderRequest;
use App\Service\SubFolderManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddSubFolderController extends AbstractController
{
    /**
     * @Route("/server/add/sub_folder/{server}", name="server_add_subFolder")
     */
    public function index(Request $request, SubFolderManager $subFolderManager):Response
    {
        $AddSubFolderRequest = new AddSubFolderRequest;

        $form = $this->createForm(SubFolderType::class, $AddSubFolderRequest);
        $form->handleRequest($request);

        if($form ->isSubmitted() && $form->isValid())
        {
            $subFolderManager->createFolder($AddSubFolderRequest);

            return $this->redirectToRoute('server_dashboard');
        }

        return $this->render('server_dashboard/index.html.twig', [
            'controller_name' => 'ServerAddFolderController',
        ]);
    }
}
