<?php

class User
{
    private $username;
    private $password;
    private $email;
    private $name;
    private $surname;

    public function __construct(string $username, string $password, string $email, string $name, string $surname)
    {
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
        $this->surname = $surname;
        $this->name = $name;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }


}