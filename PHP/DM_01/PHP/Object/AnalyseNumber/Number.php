<?php

class Number
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function countEven()
    {
        $ressource = fopen($this->file, "r");
        $sum = 0;

        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == 'number') continue; // passe à l'itération suivante 
            if ($data[1] % 2 == 0) {
                $sum += $data[1]; // somme des valeurs
            }
        }

        fclose($ressource);

        return $sum;
    }

    public function sumModulo($modulo)
    {
        $ressource = fopen($this->file, "r");
        $sum = 0;

        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == 'number') continue; // passe à l'itération suivante 
            if ($data[1] % $modulo == 0) {
                $sum += $data[1]; // somme des valeurs
            }
        }

        fclose($ressource);

        return $sum;
    }

    public function count($number)
    {
        $ressource = fopen($this->file, "r");
        $count = 0;

        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == 'number') continue; // passe à l'itération suivante 
            if ($data[1] == $number) {
                $count++;
            }
        }

        fclose($ressource);

        return $count;
    }

    /**
     * @author: Kevin
     */
    public function searchStudent($score)
    {
        $ressource = fopen($this->file, "r");

        $goodStudent = [];

        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == "number") continue;
            if ($data[1] >= $score) {
                array_push($goodStudent, $data[2]);
            }
        }
        fclose($ressource);

        print_r($goodStudent);
    }

}
