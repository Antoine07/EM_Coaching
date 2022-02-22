<?php

class Student
{
    private string $file;
    private int $precision;

    public function __construct(string $file, int $precision = 3)
    {
        $this->file = $file;
        $this->precision = $precision;
    }

    public function avg()
    {
        $ressource = fopen($this->file, "r");
        $sum = 0; // pour faire la somme des valeurs
        $nbNote = 0; // savoir combien il y a de notes

        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == 'Note') continue; // passe à l'itération suivante 

            $sum += $data[1]; // somme des valeurs
            $nbNote++; // on calcule le nombre total de note
        }

        fclose($ressource);

        return round($sum / $nbNote, $this->precision);
    }

    public function countUniqueNote()
    {
        $stat = [];
        $ressource = fopen($this->file, "r");
        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == 'Note') continue; // passe à l'itération suivante 

            // on récupère la note
            $note = $data[1];

            // si la note est la clé du table stat c'est que l'on a déjà compter une fois la note
            if (array_key_exists($note, $stat)) {
                $stat[$note] = $stat[$note] + 1;
            } else {
                // on n'a pas encore compté la note
                $stat[$note] = 1;
            }
        }

        fclose($ressource);

        return $stat;
    }

    public function avgCoeff()
    {
        $ressource = fopen($this->file, "r");
        $sum = 0; // pour faire la somme des valeurs
        $sumCoeff = 0; // savoir combien il y a de notes

        while ($data = fgetcsv($ressource, 1000, ",")) {
            if ($data[1] == 'Note') continue; // passe à l'itération suivante 

            $sum += $data[1] *  $data[2] ;
            $sumCoeff += $data[2]  ; // somme des coefficients
        }

        fclose($ressource);

        return round($sum / $sumCoeff, $this->precision);
    }
}
