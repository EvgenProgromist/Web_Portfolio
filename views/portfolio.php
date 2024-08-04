<?php
$title = "Portfolio";

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../templates/header.php';

use EvBiTek\Users_Admin\Admin;
use EvBiTek\Users_Admin\Users;

?>

<h2>My Projects</h2>

<?php

#echo logic_Operand();

#echo logic_Operand2();

$admini_object = new Admin("Evgen", 2002);

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

<?php require '../templates/footer.php'; ?>
