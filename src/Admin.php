<?php

class Admin
{
    public $username, $password;
    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = (string) $password;
    }

    function getPassword()
    {
        echo $this->password . "<br>";
    }

    function getUsername()
    {
        echo $this->username . "<br>";
    }

    public function __destruct()
    {

    }

    function print_Hi(): void
    {
        echo "Hello world PHP!!";
    }
}

