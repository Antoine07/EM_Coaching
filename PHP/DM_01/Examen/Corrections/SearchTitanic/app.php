<?php

function readFileTitanic($file)
{
    $ressource = fopen($file, 'r');

    $count= 0;

    while ($data = fgetcsv($ressource, 1000, ",")) {
        // entete du fichier
        if ($data[0] == 'Sex') continue;

        if (
            $data[1] == 1 &&
            strtolower($data[4]) == 'female' &&
            trim($data[5]) != '' && 
            (int) $data[5] < 20
        ) {
            $count++;
        }
         
    }

    fclose($ressource);

    return $count;
}

// faire la moyenne ici 

echo "Count: $count";
