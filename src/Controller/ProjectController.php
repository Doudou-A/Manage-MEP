<?php

namespace App\Controller;

use App\Entity\Folder;
use App\Service\SubFolderManager;
use App\Repository\FolderRepository;
use App\Repository\SubFolderRepository;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\EntityResult;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="project")
     */
    public function index(SubFolderRepository $repoSubFolder, SubFolderManager $subFolderManager, FolderRepository $repoFolder)
    {
        //Récupération de tous les SubFolder
        $allSubFolder = $subFolderManager->getAll();

        foreach ($allSubFolder as $subFolder) {
            $modification = $subFolder->getModification();
            if ($modification === true) {
                //Si l'attribut Modification=true on créé un tableau
                $aJsId = [];
                $aJsId[] = $subFolder->getJsId();
                $onFolderJsId = $subFolder->getOnFolder();
                //On récupère le JsId du OnFolder(Folder possédant le SubFolder modifié)
                $onFolder = $repoSubFolder->findOneByJsId($onFolderJsId);
                if (!isset($onFolder)) $onFolder = $repoFolder->findOneByJsId($onFolderJsId);
                while (isset($onFolder)) {
                    //On ajoute le JsId au tableau
                    $aJsId[] = $onFolder->getJsId();
                    if ($onFolder->getClass() == 'Folder') break;
                    $onFolder2JsId = $onFolder->getOnFolder();
                    $aJsId[] = $onFolder2JsId;
                    $onFolder = $repoSubFolder->findOneByJsId($onFolder2JsId);
                }
                //On récupère un tableau avec tous les JsId des SubFolder/Folder reliés au SubFolder Modifié. 
                //On inverse les index pour avoir le tableau dans l'order : Folder->SubFolderModifié 
                $aJsId = array_reverse($aJsId);
            }
        }

        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}
