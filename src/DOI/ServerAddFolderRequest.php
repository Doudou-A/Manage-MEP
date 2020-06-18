<?php 

namespace App\DOI;

use Symfony\Component\Validator\Constraints as Assert;

class ServerAddFolderRequest
{
    /**
     * @Assert\NotBlank()
     * @var string
     */
    public $name;
}
