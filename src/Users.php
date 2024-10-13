<?php

require_once __DIR__ . "/../vendor/autoload.php";

class Users extends Admin
{
    static $counter;
    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        parent::__construct($username, $password);
        self::$counter++;
    }

    final public function getId()
    {
        return $this->id;
    }

    public function counters()
    {
        return self::$counter;
    }

    public static function get_all_users(): array
    {
        $pdo = Database::getInstance()->getPDO();
        $stmt = $pdo->query("SELECT * FROM users");
        $users = [];

        while ($row = $stmt->fetch()) {
            $users[] = new Users($row['id'], $row['username'], $row['password']);
        }

        return $users;
    }

    // Метод для добавления нового пользователя в базу данных
    public static function addUser(string $username, string $password): void
    {
        $pdo = Database::getInstance()->getPDO();

        // Подготовка SQL-запроса для добавления нового пользователя
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

        // Привязка параметров и выполнение запроса
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
    }

    public static function deleteUser(int $userId): void
    {
        $pdo = Database::getInstance()->getPDO();

        // SQL-запрос на удаление пользователя
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute(['id' => $userId]);
    }

}