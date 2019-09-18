<?php

/*
|-------------------
| AUTOLOAD FUNCTION
|-------------------
|
| This functions dynamically loads our classes
|
*/

define('DS', DIRECTORY_SEPARATOR);
define('APP', dirname(__FILE__));

function autoload($className)
{
    $classArray = explode('\\', $className);
    $class = array_pop($classArray);
    $subPath = strtolower(implode(DS, $classArray));
    $path = APP.DS.$subPath.DS.$className.'.php';
    if (file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('autoload');

/*
|-------------------
| OUR ARRAY OF DATA
|-------------------
*/

return $array = [
    [
        'first_name' => 'Kiestis',
        'age' => 29,
        'gender' => 'male',
    ],
    [
        'first_name' => 'Vytska',
        'age' => 32,
        'gender' => 'male',
    ],
    [
        'first_name' => 'Karina',
        'age' => 25,
        'gender' => 'female',
    ],
];

/*
|-------------------
| Available formats
|-------------------
*/

function outputCsv($file, $array)
{
    $extension = '.csv';
    $fh = fopen($file.$extension, 'w') or die("can't open file");
    if (fputcsv($fh, array_keys($array['0']))) {
        echo 'Data saved to .csv file successfully'."\r\n";
    } else {
        die('Something went wrong');
    }
    foreach ($array as $fields) {
        fputcsv($fh, $fields);
    }
    fclose($fh);
}
