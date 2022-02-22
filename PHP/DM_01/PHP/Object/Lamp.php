<?php

class Lamp
{
    private $status = "off";

    public function switch()
    {
        if ($this->status == "off") {
            $this->status = "on";
        } else {
            $this->status = "off";
        }
    }

    public function getStatus(){
        return $this->status;
    }
}

$lamp = new Lamp();

echo $lamp->getStatus();
echo PHP_EOL;

$lamp->switch();
echo $lamp->getStatus();
echo PHP_EOL;

$lamp->switch();
echo $lamp->getStatus();
echo PHP_EOL;