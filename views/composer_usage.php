<?php
$title = "Работа с классами PHP";
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../templates/header.php';
?>
<body class="d-flex flex-column min-vh-100">
<div class="container my-5">
    <h2 class="text-center mb-4">Composer</h2>


    <div class="row justify-content-center">
        <div class="col-md-8">

            <img src="../assets/images/composer_usage_0.png" class="img-fluid rounded shadow mb-4" alt="Пример работы с классами в PHP">
            <p class="lead text-center">
                В моем проекте Composer служит для управления зависимостями и автозагрузки классов. Composer позволяет автоматически загружать нужные классы из указанных директорий без необходимости вручную прописывать пути к каждому файлу.<br>
                composer.json — это главный файл Composer, в котором описаны зависимости и параметры автозагрузки.<br>
                Параметр "require" — это список внешних библиотек, которые могут понадобиться для работы проекта (пока он пуст, но при необходимости туда добавляются зависимости).<br>
                Параметр "config" — включает оптимизацию автозагрузки, что улучшает производительность проекта.<br>
            </p>
        </div>
    </div>
</div>

<footer class="mt-auto bg-light text-center py-3">
    <?php require '../templates/footer.php'; ?>
</footer>
</body>