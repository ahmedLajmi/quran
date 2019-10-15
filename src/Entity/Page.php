<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageRepository")
 */
class Page
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgUrl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Soura", mappedBy="pages",cascade={"persist"})
     */
    private $souras;

    public function __construct()
    {
        $this->souras = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    public function setImgUrl(?string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return Collection|Soura[]
     */
    public function getSouras(): Collection
    {
        return $this->souras;
    }

    public function addSoura(Soura $soura): self
    {
        if (!$this->souras->contains($soura)) {
            $this->souras[] = $soura;
            $soura->addPage($this);
        }

        return $this;
    }

    public function removeSoura(Soura $soura): self
    {
        if ($this->souras->contains($soura)) {
            $this->souras->removeElement($soura);
            $soura->removePage($this);
        }

        return $this;
    }
}
