<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/productos' => [[['_route' => 'productos', '_controller' => 'App\\Controller\\BaseController::productosGlobales'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto', '_controller' => 'App\\Controller\\BaseController::contacto'], null, null, null, false, false, null]],
        '/adminProductos' => [[['_route' => 'adminProductos', '_controller' => 'App\\Controller\\BaseController::administrarProductos'], null, null, null, false, false, null]],
        '/adminCategorias' => [[['_route' => 'adminCategorias', '_controller' => 'App\\Controller\\BaseController::administrarCategorias'], null, null, null, false, false, null]],
        '/adminPedidos' => [[['_route' => 'adminPedidos', '_controller' => 'App\\Controller\\BaseController::administrarPedidos'], null, null, null, false, false, null]],
        '/resumenCesta' => [[['_route' => 'resumenCesta', '_controller' => 'App\\Controller\\BaseController::resumenCesta'], null, null, null, false, false, null]],
        '/pedido' => [[['_route' => 'pedido', '_controller' => 'App\\Controller\\BaseController::realizarPedido'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/productosPrueba' => [[['_route' => 'app_productos_index', '_controller' => 'App\\Controller\\ProductosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/productosPrueba/new' => [[['_route' => 'app_productos_new', '_controller' => 'App\\Controller\\ProductosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registro' => [[['_route' => 'registro', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/p(?'
                    .'|roductos(?'
                        .'|/([^/]++)(*:32)'
                        .'|Prueba/([^/]++)(?'
                            .'|(*:57)'
                            .'|/edit(*:69)'
                            .'|(*:76)'
                        .')'
                    .')'
                    .'|edidosProductos/([^/]++)(*:109)'
                .')'
                .'|/detalles/([^/]++)(*:136)'
                .'|/anadir/([^/]++)(*:160)'
                .'|/c(?'
                    .'|ambiarUnidades(?'
                        .'|/([^/]++)(*:199)'
                        .'|Resumen/([^/]++)(*:223)'
                    .')'
                    .'|ompletarPedido/([^/]++)(*:255)'
                .')'
                .'|/eliminarProductosCesta/([^/]++)(*:296)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'productosCat', '_controller' => 'App\\Controller\\BaseController::productos'], ['categoria'], null, null, false, true, null]],
        57 => [[['_route' => 'app_productos_show', '_controller' => 'App\\Controller\\ProductosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        69 => [[['_route' => 'app_productos_edit', '_controller' => 'App\\Controller\\ProductosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        76 => [[['_route' => 'app_productos_delete', '_controller' => 'App\\Controller\\ProductosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        109 => [[['_route' => 'pedidosProductos', '_controller' => 'App\\Controller\\BaseController::mostrarPedidosProductos'], ['idPedido'], null, null, false, true, null]],
        136 => [[['_route' => 'detalles', '_controller' => 'App\\Controller\\BaseController::detalleProducto'], ['producto'], null, null, false, true, null]],
        160 => [[['_route' => 'anadir', '_controller' => 'App\\Controller\\BaseController::anadir'], ['idProducto'], null, null, false, true, null]],
        199 => [[['_route' => 'cambiarUnidades', '_controller' => 'App\\Controller\\BaseController::cambiarUnidades'], ['idProducto'], null, null, false, true, null]],
        223 => [[['_route' => 'cambiarUnidadesResumen', '_controller' => 'App\\Controller\\BaseController::cambiarUnidadesResumen'], ['idProducto'], null, null, false, true, null]],
        255 => [[['_route' => 'completarPedido', '_controller' => 'App\\Controller\\BaseController::completarPedido'], ['idPedido'], null, null, false, true, null]],
        296 => [
            [['_route' => 'eliminarProductosCesta', '_controller' => 'App\\Controller\\BaseController::eliminarProductosCesta'], ['idProducto'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
