<?php

namespace Container8tYbTRf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiExceptionListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Shared\Infrastructure\Symfony\Exception\ApiExceptionListener' shared autowired service.
     *
     * @return \App\Shared\Infrastructure\Symfony\Exception\ApiExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Shared/Infrastructure/Symfony/Exception/ApiExceptionListener.php';

        return $container->privates['App\\Shared\\Infrastructure\\Symfony\\Exception\\ApiExceptionListener'] = new \App\Shared\Infrastructure\Symfony\Exception\ApiExceptionListener(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
