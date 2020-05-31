<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields={"email"},
 *  message="L'email est déjà utilisé",
 * )
 * @UniqueEntity(
 * fields={"username"}, 
 * message="Le pseudo est déjà pris")
 * 
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     * @Assert\Regex(
     *     pattern     = "/^[a-zA-Z0-9.@]+$/i",
     *      message="Votre adresse mail ne doit pas contenir de caractères spéciaux"
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="3", minMessage="Votre pseudo doit faire 3 caractères au minimum", max="14", maxMessage="Votre pseudo doit faire 14 caractères au maximum")
     *  @Assert\Regex(
     *     pattern     = "/^[a-zA-Z0-9]+$/i",
     *      message="Votre pseudo ne doit pas contenir de caractères spéciaux"
     * )
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire au minimum 8 caractères", max="25", maxMessage="Votre mot de passe doit faire au maximum 16 caractères")
     * @Assert\EqualTo(propertyPath="confirm_password", message="Vos mots de passe doivent correspondre")
     *  * @Assert\Regex(
     *     pattern     = "/^[a-zA-Z0-9!@]+$/i",
     *      message="Votre mot de passe ne doit pas contenir de caractères spéciaux autre que !@"
     * )
     * 
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Vos mots de passe doivent correspondre")
     */
    public $confirm_password;

    

     /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials() {}

    public function getSalt() {}

    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function __toString()
    {
        return json_encode($roles);
    }
   

    
}
