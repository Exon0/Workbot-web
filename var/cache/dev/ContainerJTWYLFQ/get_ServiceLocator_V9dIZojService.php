<?php

namespace ContainerJTWYLFQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V9dIZojService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V9dIZoj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V9dIZoj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidature' => ['privates', '.errored..service_locator.V9dIZoj.App\\Entity\\Candidature', NULL, 'Cannot autowire service ".service_locator.V9dIZoj": it references class "App\\Entity\\Candidature" but no such service exists.'],
        ], [
            'candidature' => 'App\\Entity\\Candidature',
        ]);
    }
}
