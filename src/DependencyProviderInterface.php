<?php

declare(strict_types=1);

namespace Inferno\Container;

interface DependencyProviderInterface
{
    /**
     * @return iterable
     */
    public function getFactories() : iterable;
}
