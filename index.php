<?php

$array = 
  [
    [
        'first_name' => 'Kiestis',
        'age' => 29,
        'gender' => 'male'
    ],
    [
        'first_name' => 'Vytska',
        'age' => 32,
        'gender' => 'male'
    ],
    [
        'first_name' => 'Karina',
        'age' => 25,
        'gender' => 'female'
    ],
];

function outputCsv($file, $array)
{
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename=' . $file); 

  $fh = fopen($file, "w");
  fputcsv($fh, array_keys($array['0']));

  foreach($array as $fields) {
    fputcsv($fh, $fields);
  }

  fclose($fh);
}

outputCsv('Our Data.csv', $array);

