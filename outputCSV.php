<?php

// Function to create CSV file from array
function outputCSV($file, $array)
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
