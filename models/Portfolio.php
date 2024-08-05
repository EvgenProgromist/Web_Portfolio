<?php
namespace models_portfolio_admin;

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
        echo "Password: " . $this->password . "<br>";
    }

    function getUsername()
    {
        echo "Username: " . $this->username . "<br>";
    }

    private function __destruct()
    {

    }

    function print_Hi(): void
    {
        echo "Hello world PHP!!";
    }
}

namespace models_portfolio_users;
use models_portfolio_admin\Admin;

class Users extends Admin
{
    private $id;
    static $counter;
    public function __construct($username, $password)
    {

        parent::__construct($username, $password);
        self::$counter++;
        $this->id = self::$counter;
    }
    final public function getId()
    {
        return $this->id;
    }
    public function counters()
    {
        return self::$counter;
    }
}