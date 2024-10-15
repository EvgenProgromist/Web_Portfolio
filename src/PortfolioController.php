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
            $username = trim($_POST['username']); // Удаление лишних пробелов
            $password = $_POST['password'];

            // Валидация имени пользователя
            if (empty($username)) {
                $error = "Имя пользователя не может быть пустым";
            } elseif (strlen($username) < 3) {
                $error = "Имя пользователя должно содержать как минимум 3 символа";
            }

            // Валидация пароля
            if (empty($password)) {
                $error = "Пароль не может быть пустым";
            } elseif (strlen($password) < 8) {
                $error = "Пароль должен содержать как минимум 8 символов";
            }

            // Если есть ошибки, отображаем их пользователю
            if (isset($error)) {
                include __DIR__ . '/../views/add_users.php';
                echo "<p style='color:red;'>{$error}</p>";
                return;
            }

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

