<?php

class admin
{
    public $Govno = "Hello world PHP!!";

    function print_Hi(): void
    {
        echo "Hello world PHP!!";
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