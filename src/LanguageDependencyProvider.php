<?php

declare(strict_types=1);

namespace Inferno\Container;

use Inferno\Language\Middleware\LanguageDetectorMiddleware;

final class LanguageDependencyProvider implements DependencyProviderInterface
{
    /**
     * @return iterable
     */
    public function getFactories(): iterable
    {
        return [
            LanguageDetectorMiddleware::class => LanguageDetectorMiddlewareFactory::class,
        ];
    }
}
