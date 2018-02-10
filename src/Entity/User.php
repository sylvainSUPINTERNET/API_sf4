<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="datetime", name="created_at")
     */
    private $created_at;


    /**
     * @ORM\Column(type="string", name="name")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters"
     * )
     */
    private $name;




    public function getId(){
        return $this->id;
    }


    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->created_at = new \DateTime();
    }


    public function getCreatedAtValue()
    {
        return $this->created_at;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(string $new_name){
        $this->name = $new_name;
    }








}
