<?php

class CreateNumberPush
{

    private string $file;
    private array $data = [];

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    // push un ensemble de valeurs sans sauvegarder
    // ajoute dans $data les valeurs passées par la méthode push
    public function push(array $row): void
    {
        $this->data[] = $row;
    }

    public function getData(): array
    {
        return $this->data;
    }

    // puis on utilise la fonction qui écris dans le fichier
    public function createFile(): void
    {
        // récupérer $this->data puis enregistrez ce tableau dans un fichier
    }

}
