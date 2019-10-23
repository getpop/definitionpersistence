<?php
namespace PoP\DefinitionPersistence\Persistence;

use PoP\FileStore\File\AbstractFile;
use PoP\FileStore\Store\FileStoreInterface;
use PoP\Definitions\Definitions\AbstractDefinitionPersistence;

class FileDefinitionPersistence extends AbstractDefinitionPersistence
{
    protected $file;
    public function __construct(
        FileStoreInterface $fileStore,
        AbstractFile $file
    ) {
        parent::__construct();
        $this->fileStore = $fileStore;
        $this->file = $file;
    }

    protected function getPersistedData(): array
    {
        return (array)$this->fileStore->get($this->file);
    }

    protected function persist(array $data): void
    {
        $this->fileStore->save($this->file, $data);
    }
}
