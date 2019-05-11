<?php

namespace App\Abstracts;

abstract class Persistence
{
    protected $handler;

    protected function __construct()
    {
        $this->handler = $this->load_file(CSV_FILE_PATH);
    }

    protected function load_file(string $file_path): string
    {
        if (!$handler = file_get_contents($file_path)) {
            die('There was a problem retrieving the source file');
        }
        return $handler;
    }

    protected abstract function set_array_collection(string $file_content): void;

    public abstract function get_array_collection(): array;

    public abstract function get_array_by_id(int $id): array;
}