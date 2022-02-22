<?php

class Vinyle{
    private string $name;
    private string $author;

    public function __construct(string $name, string $author)
    {
        $this->setAuthor($author);
        $this->setName($name);
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of author
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @param string $author
     *
     * @return void
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }
}