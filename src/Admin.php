<?php

class Admin
{
    public $username, $password;
    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = (string) $password;
    }

    function getPassword(): void
    {
        echo $this->password . "<br>";
    }

    function getUsername(): void
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

    public static function get_admin()
    {
        return new Admin("Evgeniy", "123456");
    }
}

