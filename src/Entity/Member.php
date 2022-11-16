<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MemberRepository::class)
 */
class Member
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Pasta::class, mappedBy="member")
     */
    private $pasta;

    public function __construct()
    {
        $this->pasta = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Pasta>
     */
    public function getPasta(): Collection
    {
        return $this->pasta;
    }

    public function addPastum(Pasta $pastum): self
    {
        if (!$this->pasta->contains($pastum)) {
            $this->pasta[] = $pastum;
            $pastum->setMember($this);
        }

        return $this;
    }

    public function removePastum(Pasta $pastum): self
    {
        if ($this->pasta->removeElement($pastum)) {
            // set the owning side to null (unless already changed)
            if ($pastum->getMember() === $this) {
                $pastum->setMember(null);
            }
        }

        return $this;
    }
}
