<?php
$title = "Home";
require_once __DIR__ . '/../vendor/autoload.php';
?>
<body class="d-flex flex-column min-vh-100">
<header>
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
</header>

<!-- Основной контент -->
<main class="flex-grow-1">
    <div class="container my-5">
        <h2 class="text-center">Добро пожаловать и приятного чтения!</h2>

        <!-- Основной текст страницы -->
        <section class="mt-4">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <p class="lead">
                        Привет! Меня зовут <strong>Евгений</strong>, и я рад приветствовать на главной странице моего сайта. Цель сайта рассказать о себе и моем приключение по миру программирования, а также показать небольшую работу с языком PHP.
                    </p>
                    <h3>Зачем я создал этот сайт ?</h3>
                    <p class="lead">
                        Во время разработки этого сайта я сосредоточился на работе с классами на языке PHP. Дополнительно я изучал пакетный менеджер Composer, включая файл конфигурации composer.json. Основное внимание было уделено пониманию архитектуры MVC (Model-View-Controller).

                        В разделе портфолио я подробно объясню, как применял принципы MVC, какие решения реализовал на PHP и как использовал Composer для управления зависимостями.
                    </p>

                    <h3>Обо мне</h3>
                    <p class="lead">
                        Я занимаюсь программированием уже 3 года. Мой путь начался с изучения Python. С поступлением в ВГЛТУ на специальность "Программное обеспечение" я начал изучать C++. Этот язык оказался сложнее Python, но благодаря уже накопленному опыту, процесс обучения шел быстрее. В течение первых полутора лет я был отличником, но сам язык не вызывал большого интереса. Также во время обучения создал сайт, который отображал базу данных и давал доступ к манипулированию с данными через сайт, тема сайта "Больница". В базе хранились данные по пациентам, врачам и лекарствах и все эти таблицы были связанны.
                    </p>
                    <p class="lead">
                        Следующим этапом стало изучение Kotlin, который я освоил на базовом уровне за 3 месяца. Я попробовал свои силы в разработке Android-приложений, но понял, что это направление мне тоже не подходит.
                    </p>
                    <p class="lead">
                        Вернувшись к Python, я продолжил работу над своим проектом по автоматической загрузке видео в TikTok. Здесь я впервые столкнулся с такими понятиями, как асинхронное программирование и прокси. Этот проект был самым увлекательным для меня, но, к сожалению, я не смог его завершить.
                    </p>
                    <p class="lead">
                        Сейчас я решил сосредоточиться на развитии как PHP-разработчик. Я начал изучать этот язык самостоятельно и осознаю, что для глубокого погружения и повышения квалификации мне необходима поддержка в виде корпоративного обучения. Моя цель — стать высококвалифицированным PHP-разработчиком, и я готов к интенсивному обучению для достижения этого результата.
                    </p>

                    <h3>Мои навыки</h3>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success"></i> Разработка простых веб приложений на PHP</li>
                        <li><i class="bi bi-check-circle-fill text-success"></i> Работа с базами данных MySQL</li>
                        <li><i class="bi bi-check-circle-fill text-success"></i> Поиск нужной информации</li>
                    </ul>

                    <h3>Мои проекты</h3>
                    <p>
                        <a target=_blank href="https://github.com/EvgenProgromist"> Ссылка на Github </a>
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Футер -->
<footer class="mt-auto bg-light text-center py-3">
    <?php require_once __DIR__ .'/../templates/footer.php'; ?>
</footer>
</body>
