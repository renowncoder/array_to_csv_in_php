<?php

class CreateCsvFile
{
    // Function to convert our array to CSV file
    public function outputCsv($file, $array)
    {
        /* We can initiate a variable, that holds the
           extension of the file, that way, user can
           simply enter name of the file, no need to
           think about extension
        */
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
