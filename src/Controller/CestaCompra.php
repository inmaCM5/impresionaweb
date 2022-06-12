<?php

namespace App\Controller;

use App\Entity\Productos;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class CestaCompra {

    protected $requestStack;
    protected $cesta = array();
    protected $sesion;

    public function __construct(RequestStack $requestStack) {
        $this->requestStack = $requestStack;
        $this->sesion = $this->requestStack->getCurrentRequest()->getSession();
        if ($this->sesion->has('cesta')) {
            $this->cesta = $this->sesion->get('cesta');
        } else {
            $this->cesta = array();
        }
    }

    public function carga_articulo($producto, $unidades) {
        $codProd = $producto->getCodigo();
        if (array_key_exists($codProd, $this->cesta)) {
            $this->cesta[$codProd]['unidades'] += $unidades;
        } else {
            $this->cesta[$codProd]['producto'] = $producto;
            $this->cesta[$codProd]['unidades'] = $unidades;
        }
        $this->guarda_cesta();
    }
    
    public function eliminar_productos($producto) {
        $codProd = $producto->getCodigo();
        if (array_key_exists($codProd, $this->cesta)) {
                unset($this->cesta[$codProd]);
        }
        $this->guarda_cesta();
    }

    public function cambiar_unidades($producto, $unidades) {
        $codProd = $producto->getCodigo();
        if (array_key_exists($codProd, $this->cesta)) {
            $this->cesta[$codProd]['unidades'] = $unidades;
            if($this->cesta[$codProd]['unidades'] <= 0){
                unset($this->cesta[$codProd]);
            }
        }
        $this->guarda_cesta();
    }

    public function guarda_cesta() {
        $this->sesion->set('cesta', $this->cesta);
    }

    public function get_productos() {
        return $this->cesta;
    }
    
    public function get_coste() {
        $precioFinal = 0;
        foreach ($this->cesta as $productoCesta) {
            $producto = $productoCesta['producto'];
            $precioFinal += $producto->getPvp() * $productoCesta['unidades'];
        }
        return $precioFinal;
    }
    
    public function vaciarCesta() {
        $this->sesion->remove('cesta');
        $this->cesta = array();
    }

    public function unidadesCesta(){
        $unidades = 0;
        foreach ($this->cesta as $productoCesta) {
            $unidades += $productoCesta['unidades'];
        }
        return $unidades;
    }

    public function longitudCesta(){
        $cestalongitud = $this->cesta;
        $longitud = count($cestalongitud);
        return $longitud;
    }
}
