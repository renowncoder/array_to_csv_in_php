<?php

require 'app/classes/Commands.php';
require 'app/classes/CreateCsvFile.php';
require 'app/classes/CreateJsonFile.php';

use App\Classes\Commands;
use App\Classes\CreateCsvFile;
use App\Classes\CreateJsonFile;

require 'config.php';

if (1 == $argc) {
    fwrite(STDOUT, 'Welcome to PHP Converter App'."\n");
    $options = new Commands();
    $options->writeAvailableCommands();

    return;
}

switch ($argv[1]) {
    //Save as CSV
    case 'saveCSV':
    if (!array_key_exists(2, $argv)) {
        fwrite(STDOUT, 'Please specify file name.'."\n");

        return;
    } else {
        $file = $argv[2];

        $makeCsv = new CreateCsvFile();
        $makeCsv->outputCsv($file, $array);
    }
    break;

    //Save as JSON
    case 'saveJSON':
    if (!array_key_exists(2, $argv)) {
        fwrite(STDOUT, 'Please specify file name.'."\n");

        return;
    } else {
        $file = $argv[2];

        $makeJson = new CreateJsonFile();
        $makeJson->outputJson($file, $array);
    }
    break;

    default:
        fwrite(STDOUT, 'This command not supported!'."\n");
}
