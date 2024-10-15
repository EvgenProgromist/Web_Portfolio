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
            <p>
                Я вам покажу информацию с помощью скриншотов сделанных в приложение Notion, им я активно пользусь для конспектирования информации.
            </p>
            <p class="lead text-center">
                Основная структура проекта:
            </p>
            <img src="assets/images/mvc_structure_0.png" class="img-fluid rounded shadow mb-4" alt="Пример работы с классами в PHP">
            <p>

            </p>
            <img src="assets/images/mvc_structure_1.png" class="img-fluid rounded shadow mb-4" alt="Пример работы с классами в PHP">
            <p class="lead text-center">
                Таким образом, каждый компонент MVC выполняет свою роль, что помогает организовать код и сделать приложение более управляемым. Вы можете расширять эту структуру, добавляя новые контроллеры, модели и представления по мере необходимости.
            </p>
        </div>
    </div>
</div>

<footer class="mt-auto bg-light text-center py-3">
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
</footer>
</body>