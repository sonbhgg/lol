<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="card">
        <h2>Регистрация</h2>

        <form action="action.php" method="post">
            <div class="field">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" placeholder="Введите имя" required>
            </div>

            <div class="field">
                <label for="email">Почта:</label>
                <input type="email" id="email" name="email" placeholder="name@example.ru" required>
            </div>

            <div class="field">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль" required>
            </div>

            <div class="field">
                <label for="confirm-password">Подтвердите пароль:</label>
                <input type="password" id="confirm-password" name="confirm_password" placeholder="Повторите пароль" required>
            </div>

            <div class="field">
                <label for="gender">Пол:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Выберите пол</option>
                    <option value="female">Женский</option>
                    <option value="male">Мужской</option>
                    <option value="other">Другой</option>
                </select>
            </div>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
