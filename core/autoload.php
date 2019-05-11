<?php

function autoload($className)
{
    $classNameWithNamespaceArray = explode('\\', $className);

    $classFile = array_pop($classNameWithNamespaceArray) . '.php';
    check_and_include(ROOT . DS .'app'. DS. 'interfaces' . DS . $classFile);
    check_and_include(ROOT . DS . 'core' . DS . $classFile);
    check_and_include(ROOT . DS . 'app' . DS . $classFile);
}

function check_and_include(string $file_path)
{
    if (file_exists($file_path)) {
        include_once($file_path);
    }
    return;
}

spl_autoload_register('autoload');