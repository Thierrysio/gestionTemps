<?php

namespace App\Entity;

use App\Repository\Eleve2Repository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=Eleve2Repository::class)
 * @UniqueEntity(
 * fields={"nom"},
 *  entityClass="App\Entity\Maitre",
 * )
 */
class Eleve2 extends Maitre
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
    private $college;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCollege(): ?string
    {
        return $this->college;
    }

    public function setCollege(string $college): self
    {
        $this->college = $college;

        return $this;
    }
}
