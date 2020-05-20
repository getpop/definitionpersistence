<?php

declare(strict_types=1);

namespace PoP\DefinitionPersistence;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;
use PoP\DefinitionPersistence\Config\ServiceConfiguration;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\Definitions\Component::class,
            \PoP\FileStore\Component::class,
            \PoP\ComponentModel\Component::class,
        ];
    }

    public static function getBuildDir(): string
    {
        return dirname(__DIR__) . '/build';
    }

    /**
     * Initialize services
     */
    protected static function doInitialize()
    {
        parent::doInitialize();
        self::initYAMLServices(dirname(__DIR__));
        ServiceConfiguration::initialize();
    }
}
