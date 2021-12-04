<?php

namespace App\Entity;

use App\Repository\Eleve1Repository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=Eleve1Repository::class)
 * @UniqueEntity(
 * fields={"nom"},
 *  entityClass="App\Entity\Maitre",
 * 
 * )
 */
class Eleve1 extends Maitre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lycee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLycee(): ?string
    {
        return $this->lycee;
    }

    public function setLycee(string $lycee): self
    {
        $this->lycee = $lycee;

        return $this;
    }
}
