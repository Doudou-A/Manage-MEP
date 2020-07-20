<?php

namespace App\Service;

use App\Entity\Folder;
use App\Entity\Project;
use App\DOI\ProjectCreateRequest;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;

class ProjectManager
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * @var ProjectRepository
     */
    private $repository;
    
    /**
     * @var FolderManager
     */
    private $folderManager;

    public function __construct(EntityManagerInterface $manager, FolderManager $folderManager, ProjectRepository $repository)
    {
        $this->manager = $manager;
        $this->repository = $repository;
        $this->folderManager = $folderManager;
    }
    
    public function createProject(ProjectCreateRequest $projectCreateRequest, $user): Project
    {
        $project = new Project;
        $project->setName($projectCreateRequest->name);
        $project->setDateCreated(new \DateTime());
        $project->addUser($user);
        $project->setFinished(false);

        $this->persist($project);

        return $project;
    }

    /**
     * @return array<Folder>
     */
    public function getAll()
    {
        return $this->repository->findAll();
    }
    
    public function getByUser($user)
    {
        return $this->repository->findByUser($user);
    }

    public function persist(Project $project):void
    {
        $this->manager->persist($project);
        $this->manager->flush();
    }

    public function remove(Project $project):void
    {
        $this->manager->remove($project);
        $this->manager->flush();
    }
}
