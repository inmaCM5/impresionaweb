<?php

namespace ContainerJFKDGY9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.form_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => 'login', 'default_target_path' => 'index', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setFirewallName('main');
        $c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $a, [], ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
        $c->setOptions(['login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.form_login.main'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($a, ($container->privates['security.user.provider.concrete.tiendapapel'] ?? $container->load('getSecurity_User_Provider_Concrete_TiendapapelService')), $b, $c, ['login_path' => 'login', 'check_path' => 'login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true, 'form_only' => false]);
    }
}