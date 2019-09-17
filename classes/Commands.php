<?php

class Commands
{
    public function writeAvailableCommands()
    {
        /** If user comes the first time or would
         *  simply forget to enter parameters, we would.
         *  print list of available commands to the terminal.
         */
        $text = 'php index.php';
        fwrite(STDOUT, 'Available commads:'."\n");
        fwrite(STDOUT, "$text saveCSV - saves in CSV format"."\n");
        fwrite(STDOUT, "$text saveJSON - saves in JSON format"."\n");
    }
}
