<?php

require_once __DIR__ . '/../vendor/autoload.php';

class PortfolioController
{
    public array $users_array;

    public function index() : void {
        $users_array = Users::get_all_users();

        include_once __DIR__ ."/../views/portfolio.php";
    }

    public function addUser(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Получение данных из формы
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Хеширование пароля (рекомендуется)
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Добавление пользователя в базу данных
            Users::addUser($username, $hashedPassword);

            // Редирект после успешного добавления
            header('Location: /Web_Portfolio/portfolio');
            exit();
        } else {
            // Отображение формы для добавления пользователя (GET-запрос)
            include __DIR__ . '/../views/add_users.php';
        }
    }

    public function deleteUser(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_POST['user_id'];

            // Удаляем пользователя из базы данных
            Users::deleteUser($userId);

            // Редирект после удаления
            header('Location: /Web_Portfolio/portfolio');
            exit();
        }
    }

}

