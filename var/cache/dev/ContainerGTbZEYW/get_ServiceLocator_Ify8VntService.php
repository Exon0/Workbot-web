<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ify8VntService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ify8Vnt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ify8Vnt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamationAvi' => ['privates', '.errored..service_locator.Ify8Vnt.App\\Entity\\ReclamationAvis', NULL, 'Cannot autowire service ".service_locator.Ify8Vnt": it references class "App\\Entity\\ReclamationAvis" but no such service exists.'],
        ], [
            'reclamationAvi' => 'App\\Entity\\ReclamationAvis',
        ]);
    }
}
