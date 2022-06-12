<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

#[ORM\Entity(repositoryClass: "App\Repository\CategoriaRepository")]
class Categoria
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $codigo;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombre;

    #[ORM\OneToMany(mappedBy: 'parents', targetEntity: Categoria::class)]
    private $childrens;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'childrens')]
    #[JoinColumn(name: 'parents_id', referencedColumnName: 'id')]
    private $parents;

    #[ORM\OneToMany(mappedBy: 'categoria', targetEntity: Productos::class)]
    private $productos;

    #[ORM\Column(type: 'boolean')]
    private $primaria;

    public function __construct()
    {
        $this->childrens = new ArrayCollection();
        $this->productos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return Collection<int, Categoria>
     */
    public function getChildrens(): Collection
    {
        return $this->childrens;
    }

    public function addChildren(Categoria $children): self
    {
        if (!$this->childrens->contains($children)) {
            $this->childrens[] = $children;
            $children->setParents($this);
        }

        return $this;
    }

    public function removeChildren(Categoria $children): self
    {
        if ($this->childrens->removeElement($children)) {
            // set the owning side to null (unless already changed)
            if ($children->getParents() === $this) {
                $children->setParents(null);
            }
        }

        return $this;
    }

    public function getParents(): ?self
    {
        return $this->parents;
    }

    public function setParents(?self $parents): self
    {
        $this->parents = $parents;

        return $this;
    }

    /**
     * @return Collection<int, Productos>
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Productos $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->setCategoria($this);
        }

        return $this;
    }

    public function removeProducto(Productos $producto): self
    {
        if ($this->productos->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getCategoria() === $this) {
                $producto->setCategoria(null);
            }
        }

        return $this;
    }

    public function getPrimaria(): ?bool
    {
        return $this->primaria;
    }

    public function setPrimaria(bool $primaria): self
    {
        $this->primaria = $primaria;

        return $this;
    }
}
