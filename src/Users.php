<?php

require_once __DIR__ . "/../vendor/autoload.php";

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