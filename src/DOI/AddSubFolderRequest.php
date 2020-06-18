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
    public $Folder;

    /**
    * @var string
    */
    public $subFolder_1;

    /**
    * @var integer
    */
    public $level;

}
