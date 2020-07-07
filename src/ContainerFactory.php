<?php

declare(strict_types=1);

namespace Inferno\Container;

use Pimple\Container;
use Pimple\Psr11\Container as PsrContainer;
use Psr\Container\ContainerInterface;

final class ContainerFactory implements ContainerFactoryInterface
{
    /**
     * @return ContainerInterface
     */
    public function __invoke() : ContainerInterface
    {
        return new PsrContainer(
            $this->configure(
                new Container()
            )
        );
    }

    /**
     * @param \Pimple\Container $container
     *
     * @return \Pimple\Container
     */
    private function configure(Container $container) : Container
    {
        return $container;
    }
}
