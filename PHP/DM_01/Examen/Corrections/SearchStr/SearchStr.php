<?php

class SearchStr
{

    public function __construct(
        private string $phrase,
        private $str = '')
    {
    }
    public function sentence():int
    {
        return count(explode( " " , $this->phrase));
    }

    public function reverse():void{
        foreach(str_split($this->phrase) as $letter){
            $this->str =  $letter . $this->str ;
        }
    }

    public function __toString():string
    {
        return $this->str;
    }
}
