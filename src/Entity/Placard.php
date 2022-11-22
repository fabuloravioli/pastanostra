<?php

namespace App\Entity;

use App\Repository\PlacardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlacardRepository::class)
 */
class Placard
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
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $publiee;

    /**
     * @ORM\ManyToMany(targetEntity=Pasta::class, inversedBy="placards")
     */
    private $pastas;

    /**
     * @ORM\ManyToOne(targetEntity=Member::class, inversedBy="placard")
     */
    private $member;

    public function __construct()
    {
        $this->pastas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function isPubliee(): ?bool
    {
        return $this->publiee;
    }

    public function setPubliee(bool $publiee): self
    {
        $this->publiee = $publiee;

        return $this;
    }

    /**
     * @return Collection<int, Pasta>
     */
    public function getPastas(): Collection
    {
        return $this->pastas;
    }

    public function addPastum(Pasta $pastum): self
    {
        if (!$this->pastas->contains($pastum)) {
            $this->pastas[] = $pastum;
        }

        return $this;
    }

    public function removePastum(Pasta $pastum): self
    {
        $this->pastas->removeElement($pastum);

        return $this;
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(?Member $member): self
    {
        $this->member = $member;

        return $this;
    }

    public function __toString(){
        return $this->description;
    }
}
