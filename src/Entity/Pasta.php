<?php

namespace App\Entity;

use App\Repository\PastaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PastaRepository::class)
 */
class Pasta
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
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origine;

    /**
     * @ORM\Column(type="integer")
     */
    private $dimensioni;

    /**
     * @ORM\OneToMany(targetEntity=Cottura::class, mappedBy="pasta", orphanRemoval=true)
     */
    private $cotturas;

    public function __construct()
    {
        $this->cotturas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getDimensioni(): ?int
    {
        return $this->dimensioni;
    }

    public function setDimensioni(int $dimensioni): self
    {
        $this->dimensioni = $dimensioni;

        return $this;
    }

    /**
     * @return Collection<int, Cottura>
     */
    public function getCotturas(): Collection
    {
        return $this->cotturas;
    }

    public function addCottura(Cottura $cottura): self
    {
        if (!$this->cotturas->contains($cottura)) {
            $this->cotturas[] = $cottura;
            $cottura->setPasta($this);
        }

        return $this;
    }

    public function removeCottura(Cottura $cottura): self
    {
        if ($this->cotturas->removeElement($cottura)) {
            // set the owning side to null (unless already changed)
            if ($cottura->getPasta() === $this) {
                $cottura->setPasta(null);
            }
        }

        return $this;
    }
}
