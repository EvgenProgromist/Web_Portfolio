<?php
$title = "Работа с классами PHP";
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../templates/header.php';
?>
<body class="d-flex flex-column min-vh-100">
<div class="container my-5">
    <h2 class="text-center mb-4">Моя работа с классами PHP</h2>


    <div class="row justify-content-center">
        <div class="col-md-8">

            <img src="assets/images/portfolio_classes_php_0.png" class="img-fluid rounded shadow mb-4" alt="Пример работы с классами в PHP">
            <p class="lead text-center">
                На изображении показан пример работы с классами в PHP. Здесь я создал класс Admin. Этот класс представляет администратора с методами для вывода его имени и пароля.<br>
                Конструктор __construct($username, $password) — инициализирует объект класса, принимая имя пользователя и пароль, и сохраняет их в свойства объекта $this->username и $this->password.<br>
                Методы getPassword() и getUsername() — выводят (через echo) пароль и имя пользователя соответственно.<br>
                Метод __destruct() — это деструктор, который автоматически вызывается при удалении объекта. Сейчас в нем нет логики.<br>
                Метод print_Hi() — выводит сообщение "Hello world PHP!!" через echo.
            </p>

            <img src="assets/images/portfolio_classes_php_1.png" class="img-fluid rounded shadow mb-4" alt="Пример работы с классами в PHP">
            <p class="lead text-center">
                Это класс Users, который наследовал свойства и методы родительского класса Admin.<br>
                В отличие от родительского класса, он при каждой инициализации обьекта дает ему Id, которое зависит от количества созданных обьектов этого класса.<br>
                Соответственно у него есть функция для получения Id обьекта, который можно вызвать через обьект.<br>
                В этом классе я также впервые использовал статическую переменную(counter). Она интересна тем, что значение этой переменной сохраняется после ее завершения, поэтому я ее использовал как счетчик.<br>
            </p>

            <img src="assets/images/portfolio_classes_php_2.png" class="img-fluid rounded shadow mb-4" alt="Пример работы с классами в PHP">
            <p class="lead text-center">
                Класс PortfolioController или контроллеры нужны для обработки запросов пользователей, взаимодействуют с моделями и загружают нужные представления.<br>
                Так как я не реализовал Базу данных, данные пришлось вписывать самостоятельно Этот класс взаимодействует только с пользователями.<br>
            </p>

            <img src="assets/images/portfolio_classes_php_3.png" class="img-fluid rounded shadow mb-4" alt="Пример работы с классами в PHP">
            <p class="lead text-center">
                Класс PortfolioController_Admin является подклассом PortfolioController и нужен для взаимодействия с админом, то есть меня.<br>
            </p>

            <p>
                В моем проекте я использую ООП (объектно-ориентированное программирование) для создания гибких структур. Работа с классами помогает мне структурировать код, делая его более читаемым и поддерживаемым. Вот основные преимущества:
            </p>
            <ul>
                <li><strong>Инкапсуляция:</strong> Классы позволяют мне скрывать сложные детали реализации, предоставляя удобные интерфейсы.</li>
                <li><strong>Наследование:</strong> Я использую наследование для создания новых классов на основе существующих, что снижает дублирование кода.</li>
                <li><strong>Полиморфизм:</strong> Это позволяет мне создавать объекты разных типов и работать с ними через один интерфейс.</li>
                <li><strong>Пример реализации:</strong> В проекте каждый компонент (контроллер, модель) представлен в виде класса, что делает приложение модульным и расширяемым.</li>
            </ul>
        </div>
    </div>
</div>

<footer class="mt-auto bg-light text-center py-3">
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
</footer>
</body>