<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HzIdcXRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hzIdcXR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hzIdcXR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quiz' => ['privates', '.errored..service_locator.hzIdcXR.App\\Entity\\Quiz', NULL, 'Cannot autowire service ".service_locator.hzIdcXR": it references class "App\\Entity\\Quiz" but no such service exists.'],
            'quizRepository' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
        ], [
            'quiz' => 'App\\Entity\\Quiz',
            'quizRepository' => 'App\\Repository\\QuizRepository',
        ]);
    }
}
