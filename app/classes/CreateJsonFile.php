<?php

namespace App\Classes;

/**
 * This class is responsible for converting
 * array of data to JSON file.
 */
class CreateJsonFile
{
    /**
     * @return file with .json extension
     */
    public function outputJson($file, $array)
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
}
