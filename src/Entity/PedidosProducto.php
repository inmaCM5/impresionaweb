<?php

namespace App\Entity;

use App\Repository\PedidosProductoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PedidosProductoRepository::class)]
class PedidosProducto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $unidades;

    #[ORM\ManyToOne(targetEntity: Pedido::class, inversedBy: 'pedidosProductos')]
    #[ORM\JoinColumn(nullable: false)]
    private $codPedido;

    #[ORM\ManyToOne(targetEntity: Productos::class, inversedBy: 'productosPedidos')]
    #[ORM\JoinColumn(nullable: false)]
    private $codProducto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnidades(): ?int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): self
    {
        $this->unidades = $unidades;

        return $this;
    }

    public function getCodPedido(): ?pedido
    {
        return $this->codPedido;
    }

    public function setCodPedido(?pedido $codPedido): self
    {
        $this->codPedido = $codPedido;

        return $this;
    }

    public function getCodProducto(): ?productos
    {
        return $this->codProducto;
    }

    public function setCodProducto(?productos $codProducto): self
    {
        $this->codProducto = $codProducto;

        return $this;
    }
}
