<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title = "Приключение"; ?></title>

    <!-- подключение bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- мои стили -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- навигация по сайту -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../views/home.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../views/portfolio.php">Портфолио</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../views/Resume.php">Резюме</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
