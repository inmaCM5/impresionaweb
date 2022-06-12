<?php

namespace App\Controller;

use App\Entity\Productos;
use App\Repository\UsuariosRepository;
use App\Entity\Usuarios;
use App\Entity\Categoria;
use App\Entity\Pedido;
use App\Entity\PedidosProducto;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;

class BaseController extends AbstractController
{
#[Route('/index', name:'index')]
function index(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('index.html.twig',
        array('categorias' => $categorias, 'cesta' => $cesta->get_productos(), 
        'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta())
    );
}

#[Route('/productos/{categoria}', name:'productosCat')]
function productos(ManagerRegistry $doctrine, $categoria, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findBy(['categoria' => $categoria]);
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('productos.html.twig',
        array('categorias' => $categorias, 'productos' => $productos,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/detalles/{producto}', name:'detalles')]
function detalleProducto(ManagerRegistry $doctrine, $producto, CestaCompra $cesta): Response
{
    $producto = $doctrine->getRepository(Productos::class)->find($producto);
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('detallesProducto.html.twig',
        array('producto' => $producto, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/productos', name:'productos')]
function productosGlobales(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    $arrayProductos = array();

    for ($i=0; $i < 21; $i++) { 
        $aleatorio = rand(0, count($productos)-1);
        array_push($arrayProductos, $productos[$aleatorio]);
    }

    return $this->render('productos.html.twig',
        array('productos' => array_unique($arrayProductos, SORT_REGULAR), 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/contacto', name: 'contacto')]
public function contacto(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('contacto.html.twig',
        array('categorias' => $categorias, 'cesta' => $cesta->get_productos(), 
        'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/adminProductos', name:'adminProductos')]
function administrarProductos(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('adminProductos.html.twig',
        array('productos' => $productos, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/adminCategorias', name:'adminCategorias')]
function administrarCategorias(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $categoriasTabla = $doctrine->getRepository(Categoria::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }
    
    return $this->render('adminCategorias.html.twig',
        array('categoriasTabla' => $categoriasTabla, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/adminPedidos', name:'adminPedidos')]
function administrarPedidos(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $pedidos = $doctrine->getRepository(Pedido::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('adminPedidos.html.twig',
        array('pedidos' => $pedidos, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/pedidosProductos/{idPedido}', name:'pedidosProductos')]
public function mostrarPedidosProductos(ManagerRegistry $doctrine, $idPedido, CestaCompra $cesta): Response {
    $pedidosProductos = $doctrine->getRepository(PedidosProducto::class)->findBy(['codPedido' => $idPedido]);
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('pedidosProductos.html.twig',
        array('pedidosProductos' => $pedidosProductos, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/anadir/{idProducto}', name:'anadir')]
public function anadir(ManagerRegistry $doctrine, $idProducto, CestaCompra $cesta): Response {
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $cesta->carga_articulo($producto, $_POST['unidades']);
    return $this->redirectToRoute('productos');
}

#[Route('/cambiarUnidades/{idProducto}', name:'cambiarUnidades')]
public function cambiarUnidades(ManagerRegistry $doctrine, $idProducto, CestaCompra $cesta): Response {
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $cesta->cambiar_unidades($producto, $_POST['unidades']);
    return $this->redirectToRoute('productos');
}

#[Route('/eliminarProductosCesta/{idProducto}', name:'eliminarProductosCesta')]
public function eliminarProductosCesta(ManagerRegistry $doctrine, $idProducto, CestaCompra $cesta): Response {
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $cesta->eliminar_productos($producto);
    return $this->redirectToRoute('resumenCesta');
}


#[Route('/completarPedido/{idPedido}', name:'completarPedido')]
public function completarPedido(ManagerRegistry $doctrine, $idPedido): Response {
    $entityManager = $doctrine->getManager();
    $pedido = $doctrine->getRepository(Pedido::class)->find($idPedido);
    $pedido->setCompletado(1);
    $entityManager->flush();
    return $this->redirectToRoute('adminPedidos');
}

#[Route('/resumenCesta', name:'resumenCesta')]
function resumenCesta(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('resumenCesta.html.twig',
        array('productos' => $productos, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/cambiarUnidadesResumen/{idProducto}', name:'cambiarUnidadesResumen')]
public function cambiarUnidadesResumen(ManagerRegistry $doctrine, $idProducto, CestaCompra $cesta): Response {
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $cesta->cambiar_unidades($producto, $_POST['unidades']);
    return $this->redirectToRoute('resumenCesta');
}

#[Route('/pedido', name:'pedido')]
public function realizarPedido(ManagerRegistry $doctrine, CestaCompra $cesta, MailerInterface $mailer): Response {
    $productos = $cesta->get_productos();
    $error = false;

    if (count($productos) > 0) {
        $entityManager = $doctrine->getManager();
        $pedido = new Pedido();
        $pedido->setFecha(\DateTime::createFromFormat('Y-m-d', date("Y-m-d")));
        $pedido->setCoste($cesta->get_coste());
        $pedido->setUsuario($this->getUser());
        $pedido->setCompletado(0);

        $entityManager->persist($pedido);
        $entityManager->flush();

        $nombreUsuario =$_SESSION['_sf2_attributes']['_security.last_username'];
        $todosUsuario = $doctrine->getRepository(Usuarios::class)->findAll();

        foreach ($todosUsuario as $usuarioSimple) { 
            if ($usuarioSimple->getUsuario() == $nombreUsuario) {
                $correoUsuario = $usuarioSimple->getEmail();
            }
        }
        
        foreach ($productos as $producto) {
            $pedidoProducto = new PedidosProducto();
            $pedidoProducto->setUnidades($producto['unidades']);
            $pedidoProducto->setCodPedido($pedido);
            $pedidoProducto->setCodProducto($doctrine->getRepository(Productos::class)->find($producto['producto']->getId()));
            $entityManager->persist($pedidoProducto);

            $productoCompra = $doctrine->getRepository(Productos::class)->find($doctrine->getRepository(Productos::class)->find($producto['producto']->getId()));
            $productoCompra->setUnidades(($productoCompra->getUnidades()) - ($producto['unidades']));
            $entityManager->persist($productoCompra);
        }

        try {
            $entityManager->flush();
        } catch (Exception $err) {
            $error = true;
        }

        if (!$error) {            
            $email = (new TemplatedEmail())
                    ->from('impresionaweb@gmail.com')
                    ->to($correoUsuario)
                    ->subject('Confirmación de pedido.')
                    ->htmlTemplate('correo.html.twig')
                    ->context(['numPedido' => $pedido->getId(), 'usuario' => $this->getUser()->getUserIdentifier(), 'cesta' => $cesta->get_productos()]);
            $mailer->send($email);
        }
    } else {
        $error = true;
    }

    $cesta->vaciarCesta();
    return $this->render('pedido.html.twig',
                    array('comprobar' => $error,
                        'numPedido' => $pedido->getId(),
                        'usuario' => $this->getUser()->getUserIdentifier(),
                        'cesta' => $cesta->get_productos(),
    ));
}
}