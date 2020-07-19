<?php

namespace App\Service;

use App\Entity\Folder;
use App\DOI\AddSubFolderRequest;
use App\Entity\SubFolder;
use App\Repository\SubFolderRepository;
use Doctrine\ORM\EntityManagerInterface;

class SubFolderManager
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * @var SubFolderRepository
     */
    private $repository;
    
    /**
     * @var FolderManager
     */
    private $folderManager;

    public function __construct(EntityManagerInterface $manager, FolderManager $folderManager, SubFolderRepository $repository)
    {
        $this->manager = $manager;
        $this->repository = $repository;
        $this->folderManager = $folderManager;
    }

    public function createInFolder(AddSubFolderRequest $addSubFolderRequest, $server, $jsIdMax = null)
    {
        $subFolder = new SubFolder;
        
        $subFolder->setName($addSubFolderRequest->getName());
        $subFolder->setDateCreated(new \DateTime());
        $subFolder->setType($addSubFolderRequest->getType());
        $subFolder->setJsId($addSubFolderRequest->getJsId() + 1);
        $subFolder->setOnFolder($addSubFolderRequest->getOnFolder());
        $subFolder->setServer($server);


        $this->persist($subFolder);

        return $subFolder;
    }
    
    public function createInSubFolder(AddSubFolderRequest $addSubFolderRequest, $jsIdMax = null) 
    {
        $subFolder = new SubFolder;
        
        $subFolder->setName($addSubFolderRequest->getName());
        $subFolder->setOnFolder($addSubFolderRequest->getOnFolder());
        $subFolder->setType($addSubFolderRequest->getType());
        $subFolder->setJsId($addSubFolderRequest->getJsId() + 1);
        $subFolder->setDateCreated(new \DateTime());

        $this->persist($subFolder);

        return $subFolder;
    }

    public function deleteFolder(int $id):void
    {
        $subFolder = $this->repository->find($id);

        $this->remove($subFolder);
    }
    /**
     * @return array<Folder>
     */
    public function getAll()
    {
        return $this->repository->findAll();
    }
    
    public function getFolder(int $id):Folder
    {
        return $this->repository->find($id);;
    }

    public function persist(SubFolder $subFolder):void
    {
        $this->manager->persist($subFolder);
        $this->manager->flush();
    }

    public function remove(SubFolder $subFolder):void
    {
        $this->manager->remove($subFolder);
        $this->manager->flush();
    }
}
