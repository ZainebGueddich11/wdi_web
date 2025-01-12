<?php

namespace ContainerQpHy5St;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KDvfx7_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KDvfx7.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KDvfx7.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'flaskIntegrationService' => ['privates', 'App\\Service\\FlaskIntegrationService', 'getFlaskIntegrationServiceService', true],
        ], [
            'flaskIntegrationService' => 'App\\Service\\FlaskIntegrationService',
        ]);
    }
}
