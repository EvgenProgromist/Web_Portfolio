<?php
$title = "Portfolio";

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../templates/header.php';

use models_portfolio_admin\Admin;
use models_portfolio_users\Users;

?>

<h2>My Projects</h2>

<?php

echo $admini_object->getUsername(). "<br>" . $admini_object->getPassword();

echo "<br>";


echo "Количество пользователей: " . Users::$counter . "<br>";
echo "ID первого пользователя: ". $users_array[0]->getId();

foreach ($users_array as $user) {
    echo "<br>";
    echo "Username: " . $user->getUsername(). "<br>" . "Password: " . $user->getPassword() . "<br>" . "ID: " . $user->getId() . "<br>";
}

?>

<?php require '../templates/footer.php'; ?>
