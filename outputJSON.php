<?php

function outputJSON($file, $array)
{
    $extension = '.json';
    $fp = fopen($file.$extension, 'w');
    if (fwrite($fp, json_encode($array, JSON_PRETTY_PRINT))) {
        echo 'Data saved to .json file successfully';
    } else {
        die('Something went wrong');
    }
    fclose($fp);
}
