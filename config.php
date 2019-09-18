<?php

// Class autoloader function
define('ROOT', __DIR__.DIRECTORY_SEPARATOR);
define('CLASSES', ROOT.'classes'.DIRECTORY_SEPARATOR);

spl_autoload_register(function ($class) {
    $file = CLASSES.str_replace('\\', '/', $class).'.php';
    if (file_exists($file)) {
        require $file;
    }
});
