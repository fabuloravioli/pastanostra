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
    private $publiée;

    /**
     * @ORM\ManyToMany(targetEntity=Pasta::class, inversedBy="placards")
     */
    private $pasta;

    /**
     * @ORM\ManyToOne(targetEntity=Member::class, inversedBy="placard")
     */
    private $member;

    public function __construct()
    {
        $this->pasta = new ArrayCollection();
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

    public function isPubliée(): ?bool
    {
        return $this->publiée;
    }

    public function setPubliée(bool $publiée): self
    {
        $this->publiée = $publiée;

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
        }

        return $this;
    }

    public function removePastum(Pasta $pastum): self
    {
        $this->pasta->removeElement($pastum);

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
}
