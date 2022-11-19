<?php

namespace App\Entity;

use App\Repository\FabricationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FabricationRepository::class)
 */
class Fabrication
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
    private $intitulé;

    /**
     * @ORM\ManyToOne(targetEntity=Fabrication::class, inversedBy="artisans")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity=Fabrication::class, mappedBy="parent")
     */
    private $producteur;

    public function __construct()
    {
        $this->producteur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitulé(): ?string
    {
        return $this->intitulé;
    }

    public function setIntitulé(string $intitulé): self
    {
        $this->intitulé = $intitulé;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getProducteur(): Collection
    {
        return $this->producteur;
    }

    public function addArtisan(self $artisan): self
    {
        if (!$this->producteur->contains($artisan)) {
            $this->producteur[] = $artisan;
            $artisan->setParent($this);
        }

        return $this;
    }

    public function removeArtisan(self $artisan): self
    {
        if ($this->producteur->removeElement($artisan)) {
            // set the owning side to null (unless already changed)
            if ($artisan->getParent() === $this) {
                $artisan->setParent(null);
            }
        }

        return $this;
    }
}
