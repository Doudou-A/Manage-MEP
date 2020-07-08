<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SubFolderRepository;

/**
 * @ORM\Entity(repositoryClass=SubFolderRepository::class)
 */
class SubFolder
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var DateTimeInterface|null
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @var DateTimeInterface|null
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateLastUpdate;

    /**
     * @ORM\Column(type="integer")
     */
    private $jsId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $onFolder;


    public function __construct()
    {
        $this->onSubFolder = new ArrayCollection();
        $this->subFolders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateLastUpdate(): ?\DateTimeInterface
    {
        return $this->dateLastUpdate;
    }

    public function setDateLastUpdate(?\DateTimeInterface $dateLastUpdate): self
    {
        $this->dateLastUpdate = $dateLastUpdate;

        return $this;
    }

    public function getJsId(): ?int
    {
        return $this->jsId;
    }

    public function setJsId(int $jsId): self
    {
        $this->jsId = $jsId;

        return $this;
    }

    public function getOnFolder(): ?int
    {
        return $this->onFolder;
    }

    public function setOnFolder(?int $onFolder): self
    {
        $this->onFolder = $onFolder;

        return $this;
    }

}
