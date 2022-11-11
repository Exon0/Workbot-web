<?php

namespace ContainerJTWYLFQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__D21kzrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..D21kzr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..D21kzr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ad' => ['privates', '.errored..service_locator..D21kzr.App\\Entity\\Ads', NULL, 'Cannot autowire service ".service_locator..D21kzr": it references class "App\\Entity\\Ads" but no such service exists.'],
            'adsRepository' => ['privates', 'App\\Repository\\AdsRepository', 'getAdsRepositoryService', true],
        ], [
            'ad' => 'App\\Entity\\Ads',
            'adsRepository' => 'App\\Repository\\AdsRepository',
        ]);
    }
}
