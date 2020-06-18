<?php

namespace App\Service;

use DateTime;
use App\Entity\Folder;
use App\DOI\AddSubFolderRequest;
use App\Repository\SubFolderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Collections\Collection;

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

    public function __construct(EntityManagerInterface $manager, SubFolderRepository $repository)
    {
        $this->manager = $manager;
        $this->repository = $repository;
    }

    public function createFolder(AddSubFolderRequest $AddSubFolderRequest) : void
    {
        $subFolder = new Folder;
        $subFolder->setName($AddSubFolderRequest->name);
        $subFolder->setDateCreated(new \DateTime());

        $this->persist($subFolder);
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

    public function persist(Folder $subFolder):void
    {
        $this->manager->persist($subFolder);
        $this->manager->flush();
    }

    public function remove(Folder $subFolder):void
    {
        $this->manager->remove($subFolder);
        $this->manager->flush();
    }
}
