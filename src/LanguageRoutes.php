<?php

declare(strict_types=1);

namespace Inferno\Container;

use Inferno\Demo\Home3\Handler\HomeHandler;
use Inferno\Renderer\RendererInterface;
use Inferno\Routing\Route\RouteCollectorInterface;
use Inferno\Routing\Strategy\ContainerRequestStrategy;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseFactoryInterface;

class LanguageRoutes
{
    /**
     * @param RouteCollectorInterface $collector
     *
     * @return RouteCollectorInterface
     */
    public function collect(RouteCollectorInterface $collector) : RouteCollectorInterface
    {
        $collector->get('/{_locale}', static function(ContainerInterface $container) {
            return new HomeHandler(
                $container->get(ResponseFactoryInterface::class),
                $container->get(RendererInterface::class)
            );
        })
        ->setName(HomeHandler::NAME)
        ->setStrategy(ContainerRequestStrategy::class)
        ->setValidationRules([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
            'body' => 'required',
        ]);

        return $collector;
    }
}
