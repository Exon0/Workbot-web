<?php

namespace ContainerJTWYLFQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Y2WWn_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..y2WWn.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..y2WWn.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'captchaRepository' => ['privates', 'App\\Repository\\CaptchaRepository', 'getCaptchaRepositoryService', true],
        ], [
            'captchaRepository' => 'App\\Repository\\CaptchaRepository',
        ]);
    }
}
