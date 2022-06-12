<?php

namespace ContainerJFKDGY9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SWtO2pdService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.SWtO2pd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SWtO2pd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'producto' => ['privates', '.errored..service_locator.SWtO2pd.App\\Entity\\Productos', NULL, 'Cannot autowire service ".service_locator.SWtO2pd": it references class "App\\Entity\\Productos" but no such service exists.'],
        ], [
            'producto' => 'App\\Entity\\Productos',
        ]);
    }
}