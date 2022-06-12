<?php

namespace App\Entity;

use App\Repository\PedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PedidoRepository::class)]
class Pedido
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $fecha;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $coste;

    #[ORM\ManyToOne(targetEntity: Usuarios::class, inversedBy: 'pedidos')]
    #[ORM\JoinColumn(nullable: false)]
    private $usuario;

    #[ORM\OneToMany(mappedBy: 'codPedido', targetEntity: PedidosProducto::class)]
    private $pedidosProductos;

    #[ORM\Column(type: 'boolean')]
    private $completado;

    public function __construct()
    {
        $this->pedidosProductos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getCoste(): ?string
    {
        return $this->coste;
    }

    public function setCoste(string $coste): self
    {
        $this->coste = $coste;

        return $this;
    }

    public function getUsuario(): ?Usuarios
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuarios $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * @return Collection<int, PedidosProducto>
     */
    public function getPedidosProductos(): Collection
    {
        return $this->pedidosProductos;
    }

    public function addPedidosProducto(PedidosProducto $pedidosProducto): self
    {
        if (!$this->pedidosProductos->contains($pedidosProducto)) {
            $this->pedidosProductos[] = $pedidosProducto;
            $pedidosProducto->setCodPedido($this);
        }

        return $this;
    }

    public function removePedidosProducto(PedidosProducto $pedidosProducto): self
    {
        if ($this->pedidosProductos->removeElement($pedidosProducto)) {
            // set the owning side to null (unless already changed)
            if ($pedidosProducto->getCodPedido() === $this) {
                $pedidosProducto->setCodPedido(null);
            }
        }

        return $this;
    }

    public function getCompletado(): ?bool
    {
        return $this->completado;
    }

    public function setCompletado(bool $completado): self
    {
        $this->completado = $completado;

        return $this;
    }
}
