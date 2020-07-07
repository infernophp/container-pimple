<?php

declare(strict_types=1);

namespace Inferno\Container;

use Pimple\Container;
use Pimple\Psr11\Container as PsrContainer;
use Psr\Container\ContainerInterface;

final class ContainerConfig implements ContainerConfigInterface
{
    /**
     * @var \Pimple\Container
     */
    private Container $container;

    /**
     * @var array
     */
    private array $dependencies;

    /**
     * @param \Pimple\Container $container
     * @param array $dependencies
     */
    public function __construct(Container $container, array $dependencies)
    {
        $this->container = $container;
        $this->dependencies = $dependencies;
    }

    /**
     * @param \Pimple\Container $container
     *
     * @return \Pimple\Container
     */
    private function configure() : Container
    {


        return $this;
    }
}
