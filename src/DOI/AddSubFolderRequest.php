<?php 

namespace App\DOI;

use Symfony\Component\Validator\Constraints as Assert;

class AddSubFolderRequest
{
    /**
     * @Assert\NotBlank()
     * @var string
     */
    public $name;
    
    /**
     * @var string
     */
    public $type;
    
    /**
    * @var string
    */
    public $folder;

    /**
    * @var string
    */
    public $subFolder;

    /**
    * @var integer
    */
    public $level;

    /**
     * @var int
     */
    private $jsId;

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

    public function getSubFolder(): ?string
    {
        return $this->subFolder;
    }

    public function setSubFolder(?string $subFolder): self
    {
        $this->subFolder = $subFolder;

        return $this;
    }

    public function getFolder(): ?string
    {
        return $this->folder;
    }

    public function setFolder(?string $folder): self
    {
        $this->folder = $folder;

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
