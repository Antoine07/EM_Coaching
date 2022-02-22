<?php

class Platine
{

    private  $vinyle = null ;

    public function __construct(Vinyle $vinyle)
    {
        $this->vinyle = $vinyle;
    }

    /**
     * Retitrer le vinyle de la platine
     *
     * @return Vinyle
     */
    public function getVinyle(): array
    {
        $name = $this->vinyle->getName();
        $author = $this->vinyle->getAuthor();
        $this->vinyle = null;

        return [
            'author' => $author,
            'name' =>$name 
        ];
    }

    /**
     * Set the value of vinyle
     *
     * @param Vinyle $vinyle
     *
     * @return void
     */
    public function setVinyle(Vinyle $vinyle):string|null
    {
        // pas de vinyle sur la platine
        if (is_null( $this->vinyle ) ) {
            $this->vinyle = $vinyle;

            return null; 
        }

        return "Il y a déjà un vinyle sur la platine";
    }

    public function __toString()
    {
        $name = $this->vinyle->getName();
        $author = $this->vinyle->getAuthor();

        return "Name: $name author: $author ";
    }
}
