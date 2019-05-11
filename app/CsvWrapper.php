<?php

namespace Core;

use Interfaces\PersistenceInterface;


class CsvWrapper implements PersistenceInterface
{
    private $handler;
    /** @var array $array_collection */
    private $array_collection;


    public function __construct()
    {
        $this->handler = $this->load_file(CSV_FILE_PATH);
        $this->set_array_collection($this->handler);
    }


    public function load_file(string $file_path): string
    {
        if (!$handler = file_get_contents($file_path)) {
            die('There was a problem retrieving the source file');
        }
        return $handler;
    }

    public function get_array_collection(): array
    {
        return $this->array_collection;
    }

    public function set_array_collection(string $file_content): void
    {
        $lines = explode(PHP_EOL, $file_content);
        $keys_array = explode(',', array_shift($lines));

        foreach ($lines as $line) {
            $values_array = explode(',', $line);
            $final_array[(int)$values_array[0]] = array_combine($keys_array, $values_array);
        }

        $this->array_collection = $final_array;
    }

    public function  get_array_by_id(int $id) :array
    {
        if (!array_key_exists($id, $this->array_collection)) {
            die('The specified element does not exists!');
        }
        return $this->array_collection[$id];
    }
}