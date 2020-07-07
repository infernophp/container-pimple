<?php

declare(strict_types=1);

namespace Inferno\Container;

use Psr\Container\ContainerInterface;

interface ContainerFactoryInterface
{
    /**
     * @return ContainerInterface
     */
    public function __invoke() : ContainerInterface;
}
