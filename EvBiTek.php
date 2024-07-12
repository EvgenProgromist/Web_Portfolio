<?php

class admin
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

class Users extends admin
{
     $users_array;
     private $id;
     static $counter;
     public function __construct($username, $password)
     {

         parent::__construct($username, $password);
         self::$counter++;
         $this->id = self::$counter;
         $users_array[$this->id] = array();
     }
     public function getId()
     {
         return $this->id;
     }
     public function counters()
     {
         return self::$counter;
     }
}

function logic_Operand() : void
{
    // Оператор "&&" имеет больший приоритет, чем "and"

    // Результат выражения (true && false) будет присвоен переменной $bar1
    // Действие приоритета: $bar1 = (true && false)
    $bar1 = true && false;

    // Сначала переменной присваивается значение true, а затем вычисляется второй операнд
    // Действие приоритета: ($bar2 = true) and false
    $bar2 = true and false;

    var_dump($bar1, $bar2);

    // ($bar3 = 9) and 3
    $bar3 = 9 and 3;

    echo "<br>$bar3";   // => 9
    echo "<br>";

    if ($bar1 OR $bar2 OR $bar3) {
        echo "<br>";
        echo "Govno";
        echo "<br>";
        echo "$bar1";
        echo "<br>";
        echo "$bar2";
        echo "<br>";
        echo "$bar3";
    }
}

function logic_Operand2() : void
{
    echo "<br>";
    $a = 15;
    $b = 7;
    $c = $a / $b;
    $c1 = (int) ($a / $b);
    echo "c1 = $c1";
    echo "<br>";
    echo "c = $c";

    echo "<br>";

}