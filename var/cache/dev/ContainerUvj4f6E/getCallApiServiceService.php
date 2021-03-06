<?php

namespace ContainerUvj4f6E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCallApiServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CallApiService' shared autowired service.
     *
     * @return \App\Service\CallApiService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CallApiService.php';

        return $container->privates['App\\Service\\CallApiService'] = new \App\Service\CallApiService(($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()));
    }
}
