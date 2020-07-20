<?php

namespace App\Entity;

use App\Repository\ServerRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServerRepository::class)
 */
class Server
{
    /**
     * @var integer
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
     * @ORM\OneToMany(targetEntity=SubFolder::class, mappedBy="server")
     */
    private $subFolders;

    /**
     * @ORM\OneToMany(targetEntity=Folder::class, mappedBy="server")
     */
    private $folders;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    public function __construct()
    {
        $this->subFolders = new ArrayCollection();
        $this->folders = new ArrayCollection();
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
            $subFolder->setServer($this);
        }

        return $this;
    }

    public function removeSubFolder(SubFolder $subFolder): self
    {
        if ($this->subFolders->contains($subFolder)) {
            $this->subFolders->removeElement($subFolder);
            // set the owning side to null (unless already changed)
            if ($subFolder->getServer() === $this) {
                $subFolder->setServer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Folder[]
     */
    public function getFolders(): Collection
    {
        return $this->folders;
    }

    public function addFolder(Folder $folder): self
    {
        if (!$this->folders->contains($folder)) {
            $this->folders[] = $folder;
            $folder->setServer($this);
        }

        return $this;
    }

    public function removeFolder(Folder $folder): self
    {
        if ($this->folders->contains($folder)) {
            $this->folders->removeElement($folder);
            // set the owning side to null (unless already changed)
            if ($folder->getServer() === $this) {
                $folder->setServer(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
