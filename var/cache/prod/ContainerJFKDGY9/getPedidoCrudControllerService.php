<?php

namespace ContainerJFKDGY9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPedidoCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\PedidoCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PedidoCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\PedidoCrudController'] = $instance = new \App\Controller\Admin\PedidoCrudController();

        $instance->setContainer(($container->privates['.service_locator.GymbEAg'] ?? $container->load('get_ServiceLocator_GymbEAgService'))->withContext('App\\Controller\\Admin\\PedidoCrudController', $container));

        return $instance;
    }
}
