<?php

function writeAvailableCommands()
{
    $text = 'php index.php';
    fwrite(STDOUT, 'Available commads:'."\n\n");
    fwrite(STDOUT, "$text saveCSV - saves in CSV format"."\n");
    fwrite(STDOUT, "$text saveJSON - saves in JSON format"."\n");
}
