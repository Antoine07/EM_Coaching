<?php

function readFileTitanic($file)
{
    $ressource = fopen($file, 'r');

    $res= [];

    while ($data = fgetcsv($ressource, 1000, ",")) {
        // entete du fichier
        if ($data[0] == 'Sex') continue;

        // on a survécu on est une femme (pb de casse éviter avec strtolower)
        // l'age est cohérent
        if (
            $data[1] == 1 &&
            strtolower($data[4]) == 'female' &&
            trim($data[5]) != '' && 
            (int) $data[5] != 0
        ) {
            $res[] = [
                'name' => $data[3],
                'age' => (int) $data[5]
            ];
        }
         
    }

    fclose($ressource);

    return $res;
}

// faire la moyenne ici 
foreach( readFileTitanic('./Data/titanic.csv') as $person ) {

    // echo $person['age'];
    // echo $person['name'];

    echo "age : {$person['age']}, name: {$person['name']}";
    echo PHP_EOL;
}
