<?php

namespace ContainerRsGKw86;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G8FcB2QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G8FcB2Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G8FcB2Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cesta' => ['privates', 'App\\Controller\\CestaCompra', 'getCestaCompraService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'cesta' => 'App\\Controller\\CestaCompra',
            'doctrine' => '?',
        ]);
    }
}
