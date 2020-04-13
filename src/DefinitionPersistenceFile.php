<?php

declare(strict_types=1);

namespace PoP\DefinitionPersistence;

use PoP\FileStore\File\AbstractFile;
use PoP\DefinitionPersistence\Component;

class DefinitionPersistenceFile extends AbstractFile
{
    public function getDir()
    {
        return Component::getBuildDir();
    }

    public function getFilename()
    {
        return 'definitions.json';
    }
}
