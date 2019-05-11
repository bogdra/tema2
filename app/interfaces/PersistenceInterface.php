<?php

namespace Interfaces;

interface PersistenceInterface
{
    public function load_file(string $file_path): string;

    public function set_array_collection(string $file_content): void;

    public function get_array_collection(): array;

    public function get_array_by_id(int $id): array;

}