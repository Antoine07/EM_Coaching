<?php

class User
{

    private int $id;
    private string $name;
    private float $age;

    public function __construct(int $id, string $name, float $age)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return float
     */
    public function getAge(): float
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param float $age
     *
     * @return self
     */
    public function setAge(float $age): self
    {
        $this->age = $age;

        return $this;
    }
}
