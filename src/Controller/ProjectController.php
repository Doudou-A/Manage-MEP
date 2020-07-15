<?php

namespace App\Controller;

use App\Service\SubFolderManager;
use App\Repository\FolderRepository;
use App\Repository\SubFolderRepository;
use App\Controller\ServerDashboardController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="project")
     */
    public function index(SubFolderRepository $repoSubFolder, SubFolderManager $subFolderManager, FolderRepository $repoFolder, ServerDashboardController $controller)
    {
        //Récupération de tous les SubFolder
        $allSubFolder = $subFolderManager->getAll();

        //création du tableau contenant les subFolder modifié du projet
        $aSubFolderModif = [];
        $aSubFolderModif = [];

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
                $aJsId[] = $onFolder->getJsId();
                while (isset($onFolder)) {
                    //On ajoute le JsId au tableau
                    if ($onFolder->getClass() == 'Folder') break;
                    $onFolder2JsId = $onFolder->getOnFolder();
                    $aJsId[] = $onFolder2JsId;
                    $onFolder = $repoSubFolder->findOneByJsId($onFolder2JsId);
                }

                //On récupère un tableau avec tous les JsId des SubFolder/Folder reliés au SubFolder Modifié. 
                //Ajout du nombre d'index du tableau dans le tableau (utilisé pour la boucle for en js)
                $lenghtArray = count($aJsId);
                $aJsId[] = $lenghtArray;

                //On inverse les index pour avoir le tableau dans l'ordre : Folder->SubFolderModifié 
                $aJsId = array_reverse($aJsId);
                $aSubFolderModif [] = $aJsId;
            }
        }

        if(isset($aSubFolderModif)){
            $lenghtASubFolderModif = count($aSubFolderModif);
            $aSubFolderModif [] = $lenghtASubFolderModif;
            $aSubFolderModif = array_reverse($aSubFolderModif);
        }

        return new JsonResponse($aSubFolderModif);
    }
}
