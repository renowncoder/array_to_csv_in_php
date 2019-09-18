<?php

namespace App\Classes;

/**
 * This class is responsible for converting
 * array of data to CSV file.
 */
class CreateCsvFile
{
    /**
     * @return file with .csv extension
     */
    public function outputCsv($file, $array)
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
}
