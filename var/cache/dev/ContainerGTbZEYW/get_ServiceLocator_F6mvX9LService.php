<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F6mvX9LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f6mvX9L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f6mvX9L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evennement' => ['privates', '.errored..service_locator.f6mvX9L.App\\Entity\\Evennement', NULL, 'Cannot autowire service ".service_locator.f6mvX9L": it references class "App\\Entity\\Evennement" but no such service exists.'],
        ], [
            'evennement' => 'App\\Entity\\Evennement',
        ]);
    }
}
