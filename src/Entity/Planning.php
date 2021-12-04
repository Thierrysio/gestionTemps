<?php

namespace App\Entity;

use DateInterval;
use App\Repository\PlanningRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass=PlanningRepository::class)
 */
class Planning
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $lesjours = [];

    /**
     * @ORM\Column(type="array")
     */
    private $lesheures = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLesjours(): ?array
    {
        return $this->lesjours;
    }

    public function setLesjours(array $lesjours): self
    {
        $this->lesjours = $lesjours;

        return $this;
    }

    public function getLesheures(): ?array
    {
        return $this->lesheures;
    }

    public function setLesheures(array $lesheures): self
    {
        $this->lesheures = $lesheures;

        return $this;
    }

    public function ConstructionDesJours(DateTime $param, DateTime $param2)
    {
        $diff = date_diff($param,$param2);

        $arraypro= array();
        for ($i = 1; $i <= $diff->format('%a')+1; $i++) {
            $date = new DateTime(date_format($param->add(new DateInterval('P1D')),'y-m-d'));   
            $arraypro[] = $date ;
        }
        $this->setLesjours($arraypro);

    }

    public function ConstructionDesheures(DateTime $param, DateTime $param2)
    {
        $diff = date_diff($param,$param2);

        $arraypro= array();
        for ($i = 1; $i <= $diff->format('%h')+1; $i++) {
            $date = new DateTime(date_format($param->add(new DateInterval('PT1H')),'H:i:s'));   
            $arraypro[] = $date ;
        }
        $this->setLesheures($arraypro);

    }
}
