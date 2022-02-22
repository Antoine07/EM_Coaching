<?php

class CreateNumber{

    private string $file;
    private array $data = [];

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function createData(array $data): void
    {
        $fp = fopen($this->file, 'w');

        foreach ($data as $row) {
            fputcsv($fp, $row); // $row d'une ligne [11, "Alan"]
        }

        fclose($fp);
    }

    // push un ensemble de valeurs sans sauvegarder
    public function push(array $row):void{
        // ajoute dans $data les valeurs passées par la méthode push
    }

    // puis on utilise la fonction qui écris dans le fichier
    public function createFile():void{
        // récupérer $this->data puis enregistrez ce tableau dans un fichier
    }
}