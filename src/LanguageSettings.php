<?php

declare(strict_types=1);

namespace Inferno\Container;

class LanguageSettings implements LanguageSettingsInterface
{
    private const FALLBACK_DEFAULT = 'en';
    private const AVAILABLE_LANGUAGE_DEFAULT = [
        'en' => 'en_EN',
        'de' => 'de-DE',
    ];

    /**
     * @var string[]
     */
    private array $configs;

    /**
     * @param string[] $configs
     */
    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    /**
     * @return string
     */
    public function getFallback(): string
    {
        return $this->configs[LanguageSettingsInterface::FALLBACK_KEY] ?? static::FALLBACK_DEFAULT;
    }

    /**
     * @return string[]
     */
    public function getAvailableLanguages(): array
    {
        return $this->configs[LanguageSettingsInterface::AVAILABLE_LANGUAGE_KEY] ?? static::AVAILABLE_LANGUAGE_DEFAULT;
    }
}
