<?php

include 'writeAvailableCommands.php';

if (1 == $argc) {
    fwrite(STDOUT, 'Welcome to PHP Converter App'."\n\n");
    writeAvailableCommands();

    return;
}

// Our array of data
$array = [
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

switch ($argv[1]) {
    //Save as CSV
    case 'saveCSV':
    if (!array_key_exists(2, $argv)) {
        fwrite(STDOUT, 'Please specify file name.'."\n");

        return;
    } else {
        $file = $argv[2];

        require_once 'outputCSV.php';
        //Call the function
        outputCSV($file, $array);
    }
    break;

    //Save as JSON
    case 'saveJSON':
    if (!array_key_exists(2, $argv)) {
        fwrite(STDOUT, 'Please specify file name.'."\n");

        return;
    } else {
        $file = $argv[2];
        require_once 'outputJSON.php';
        //Call the funciton
        outputJSON($file, $array);
    }
    break;

    default:
        fwrite(STDOUT, 'This command not supported!'."\n");
}
