<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FolderRepository;

/**
 * @ORM\Entity(repositoryClass=FolderRepository::class)
 */
class Folder
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
     * @var DateTimeInterface|null
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="integer")
     */
    private $jsId;

    /**
     * @ORM\OneToMany(targetEntity=SubFolder::class, mappedBy="onFolder")
     */
    private $subFolders;

    public function __construct()
    {
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

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function removeSubFolder(SubFolder $subFolder): self
    {
        if ($this->subFolders->contains($subFolder)) {
            $this->subFolders->removeElement($subFolder);
            // set the owning side to null (unless already changed)
            if ($subFolder->getFolder() === $this) {
                $subFolder->setFolder(null);
            }
        }

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

    /**
     * @return Collection|SubFolder[]
     */
    public function getSubFolders(): Collection
    {
        return $this->subFolders;
    }

    public function addSubFolder(SubFolder $subFolder): self
    {
        if (!$this->subFolders->contains($subFolder)) {
            $this->subFolders[] = $subFolder;
            $subFolder->setOnFolder($this);
        }

        return $this;
    }
}
