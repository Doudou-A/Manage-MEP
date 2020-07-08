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
    * @var int
    */
    public $onFolder;

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

    public function getOnFolder(): ?string
    {
        return $this->onFolder;
    }

    public function setOnFolder(string $onFolder): self
    {
        $this->onFolder = $onFolder;

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
