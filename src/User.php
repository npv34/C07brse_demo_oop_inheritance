<?php

class User
{
    public int $id;
    public string $name;
    public string $email;
    public string $phone;

    public function __construct(int $id,
                                string $name,
                                string $email,
                                string $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getInfo(): string {
        return "Name: $this->name - Email: $this->email - Phone: $this->phone";
    }
}