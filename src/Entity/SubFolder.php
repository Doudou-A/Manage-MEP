<?php

namespace App\Entity;

use DateTimeInterface;
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
     * @var int
     * @ORM\Column(type="integer")
     */
    private $level;

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
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subFolder;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subFolder_2;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subFolder_3;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subFolder_4;

    /**
     * @ORM\ManyToOne(targetEntity=Folder::class, inversedBy="subFolders")
     */
    private $Folder;

    /**
     * @ORM\Column(type="integer")
     */
    private $jsId;

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

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

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

    public function getSubFolder(): ?string
    {
        return $this->subFolder;
    }

    public function setSubFolder(?string $subFolder): self
    {
        $this->subFolder = $subFolder;

        return $this;
    }

    public function getSubFolder2(): ?string
    {
        return $this->subFolder_2;
    }

    public function setSubFolder2(?string $subFolder_2): self
    {
        $this->subFolder_2 = $subFolder_2;

        return $this;
    }

    public function getSubFolder3(): ?string
    {
        return $this->subFolder_3;
    }

    public function setSubFolder3(?string $subFolder_3): self
    {
        $this->subFolder_3 = $subFolder_3;

        return $this;
    }

    public function getSubFolder4(): ?string
    {
        return $this->subFolder_4;
    }

    public function setSubFolder4(?string $subFolder_4): self
    {
        $this->subFolder_4 = $subFolder_4;

        return $this;
    }

    public function getFolder(): ?Folder
    {
        return $this->Folder;
    }

    public function setFolder(?Folder $Folder): self
    {
        $this->Folder = $Folder;

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

}
