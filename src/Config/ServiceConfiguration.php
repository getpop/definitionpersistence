<?php
namespace PoP\DefinitionPersistence\Config;

use PoP\ComponentModel\Container\ContainerBuilderUtils;
use PoP\Root\Component\PHPServiceConfigurationTrait;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure()
    {
        // Add ModuleFilter to the ModuleFilterManager
        ContainerBuilderUtils::injectServiceIntoService(
            'definition_manager',
            'file_definition_persistence',
            'setDefinitionPersistence'
        );
    }
}
