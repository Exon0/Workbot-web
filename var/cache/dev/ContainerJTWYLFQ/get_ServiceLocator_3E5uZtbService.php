<?php

namespace ContainerJTWYLFQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3E5uZtbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3E5uZtb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3E5uZtb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contratRepository' => ['privates', 'App\\Repository\\ContratRepository', 'getContratRepositoryService', true],
        ], [
            'contratRepository' => 'App\\Repository\\ContratRepository',
        ]);
    }
}
