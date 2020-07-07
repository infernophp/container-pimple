<?php

declare(strict_types=1);

namespace Inferno\Container;

use Inferno\Language\Middleware\LanguageDetectorMiddleware;
use Psr\Container\ContainerInterface;
use Sinergi\BrowserDetector\Language;

class LanguageDetectorMiddlewareFactory
{
    /**
     * @param \Psr\Container\ContainerInterface $container
     *
     * @return \Inferno\Language\Middleware\LanguageDetectorMiddleware
     */
    public function __invoke(ContainerInterface $container) : LanguageDetectorMiddleware
    {
        $availableLanguages = $container->get('config.language-available');
        $fallbackLanguage = $container->get('config.language-fallback');

        $setLanguageCallback = null;
        if ($container->has('config.language-set-callback')) {
            $setLanguageCallback = $container->get('config.language-set-callback');
        }

        return new LanguageDetectorMiddleware(
            $availableLanguages,
            $fallbackLanguage,
            $container,
            $container->get('response-factory'),
            $container->get('uri-factory'),
            new Language(),
            $setLanguageCallback
        );
    }
}
