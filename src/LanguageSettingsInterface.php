<?php

declare(strict_types=1);

namespace Inferno\Container;

interface LanguageSettingsInterface
{
    public const FALLBACK_KEY = 'language-fallback';
    public const AVAILABLE_LANGUAGE_KEY = 'language-available';

    /**
     * @return string
     */
    public function getFallback(): string;

    /**
     * @return string[]
     */
    public function getAvailableLanguages(): array;
}
