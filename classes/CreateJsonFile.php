<?php

class CreateJsonFile
{
    // Function to convert our array to JSON file
    public function outputJson($file, $array)
    {
        /* We can initiate a variable, that holds the
           extension of the file, that way, user can
           simply enter name of the file, no need to
           think about extension
        */
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
