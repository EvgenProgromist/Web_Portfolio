<body class="d-flex flex-column min-vh-100">
<header>
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
</header>

<form action="/Web_Portfolio/add_users" method="POST" class="p-4 border rounded shadow-sm">
    <div class="mb-3">
        <label for="username" class="form-label">Имя пользователя:</label>
        <input type="text" id="username" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Пароль:</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Добавить пользователя</button>
    </div>
</form>
</body>
