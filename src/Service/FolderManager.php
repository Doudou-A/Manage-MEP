<?php

namespace App\Service;

use DateTime;
use App\Entity\Folder;
use App\DOI\ServerAddFolderRequest;
use App\Repository\FolderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Collections\Collection;

class FolderManager
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * @var FolderRepository
     */
    private $repository;

    public function __construct(EntityManagerInterface $manager, FolderRepository $repository)
    {
        $this->manager = $manager;
        $this->repository = $repository;
    }

    public function createFolder(ServerAddFolderRequest $serverAddFolderRequest) : Folder
    {
        $folder = new Folder;
        $folder->setName($serverAddFolderRequest->name);
        $folder->setDateCreated(new \DateTime());

        $this->persist($folder);

        return $folder;
    }
     
    public function deleteFolder(int $id):void
    {
        $folder = $this->repository->find($id);

        $this->remove($folder);
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
    
    public function getFolderByName(string $folder):Folder
    {
        $Folder = $this->repository->findByName($folder);
        return $Folder[0];
    }

    public function persist(Folder $folder):void
    {
        $this->manager->persist($folder);
        $this->manager->flush();
    }

    public function remove(Folder $folder):void
    {
        $this->manager->remove($folder);
        $this->manager->flush();
    }
}
