<?php

namespace App\Service;

use DateTime;
use App\Entity\Folder;
use App\DOI\ServerAddFolderRequest;
use App\Repository\FolderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

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

    public function createFolder(ServerAddFolderRequest $serverAddFolderRequest) : void
    {
        $folder = new Folder;
        $folder->setName($serverAddFolderRequest->name);
        $folder->setDateCreated(new \DateTime());

        $this->persist($folder);
    }
     
    public function deleteFolder(int $id):void
    {
        $folder = $this->repository->find($id);

        $this->remove($folder);
    }

    public function getFolder(int $id):Folder
    {
        $folder = $this->repository->find($id);
        return $folder;
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
