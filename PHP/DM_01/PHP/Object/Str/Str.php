<?php

class Str
{

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function countChar(string $char): void
    {
        $ressource = fopen($this->file, 'r');
        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == 'name') continue; 
            // echo substr_count(strtolower($data[1]), strtolower($char));
            // echo PHP_EOL;

            $name = $data[1] ;
            $count = 0;
            for($i=0;$i<strlen($data[1]); $i++){
                if( strtolower($name[$i]) == strtolower($char) ) $count++;
            }

            echo "$name, nombre de caractèrs $char dans la chaine : $count";
            echo PHP_EOL;
        }

        fclose($ressource);
    }
}
