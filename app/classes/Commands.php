<?php

namespace App\Classes;

/**
 * Provides detailed information to the user
 * on how to use the app.
 */
class Commands
{
    private $text = 'php index.php';

    /**
     * @return two available commands:
     *             How to save file in CSV format &
     *             How to save file in JSON format
     */
    public function writeAvailableCommands()
    {
        fwrite(STDOUT, 'Available commads:'."\n");
        fwrite(STDOUT, "$text saveCSV - saves in CSV format"."\n");
        fwrite(STDOUT, "$text saveJSON - saves in JSON format"."\n");
    }
}
