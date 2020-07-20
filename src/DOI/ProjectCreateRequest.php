<?php 

namespace App\DOI;

use Symfony\Component\Validator\Constraints as Assert;

class ProjectCreateRequest
{
    /**
     * @Assert\NotBlank()
     * @var string
     */
    public $name;

}
