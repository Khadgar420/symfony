<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 */
class Test
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $Testus = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTestus(): ?array
    {
        return $this->Testus;
    }

    public function setTestus(array $Testus): self
    {
        $this->Testus = $Testus;

        return $this;
    }
}
