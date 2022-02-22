<?php

class Math
{
    private string $file;
    private array $numbers = [];

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function shuffle():void
    {

        $ressource = fopen($this->file, "r");
        while ($data = fgetcsv($ressource, 1000, ",")) {
            if (trim($data[1]) == 'numbers') continue;

            $this->numbers[] = [$data[0], $data[1]];
        }

        shuffle($this->numbers);

        print_r($this->numbers);

        fclose($ressource);
    }

    public function persist(string $fileSave):void
    {
        $fp = fopen($fileSave, 'w');

        fputcsv($fp, ['id', 'numbers']);


        foreach ($this->numbers as $row) {
            fputcsv($fp, $row); 
        }

        fclose($fp);
    }
}
