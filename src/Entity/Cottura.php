<?php

namespace App\Entity;

use App\Repository\CotturaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CotturaRepository::class)
 */
class Cottura
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
    private $typo;

    /**
     * @ORM\Column(type="integer")
     */
    private $tiempo;

    /**
     * @ORM\ManyToOne(targetEntity=Pasta::class, inversedBy="cotturas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pasta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypo(): ?string
    {
        return $this->typo;
    }

    public function setTypo(string $typo): self
    {
        $this->typo = $typo;

        return $this;
    }

    public function getTiempo(): ?int
    {
        return $this->tiempo;
    }

    public function setTiempo(int $tiempo): self
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    public function getPasta(): ?Pasta
    {
        return $this->pasta;
    }

    public function setPasta(?Pasta $pasta): self
    {
        $this->pasta = $pasta;

        return $this;
    }

    public function __toString(): string
    {
      return "for this " . $this->typo . " it's " . $this->tiempo;
    }

}
