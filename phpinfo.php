<?php

require_once "EvBiTek.php";

echo logic_Operand();

echo logic_Operand2();

$admini_object = new admin("Evgen", 2002);

echo "<br>";

echo $admini_object->print_Hi();

echo "<br>";

echo $admini_object->getUsername(). "<br>" . $admini_object->getPassword();

echo "<br>";

$user1 = new Users("Daniil", "_123456789");
$user4 = new Users("Stepa", "v294743829");
$user2 = new Users("Ruslan", "wfsdf3213123");
$user10 = new Users("Kristina", "r1002239Kris");
$user11 = new Users("Aleksandra", "f123456789");

echo "Количество пользователей: " . Users::$counter . "<br>";
echo "ID первого пользователя: ". $user1->getId();

?>
