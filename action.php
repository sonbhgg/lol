<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';
    
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    
    if (empty($email)) {
        $errors['email'] = 'Поле Email обязательно для заполнения';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Введите корректный email адрес';
    }
    
    if (empty($password)) {
        $errors['password'] = 'Поле Пароль обязательно для заполнения';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Пароль должен содержать минимум 6 символов';
    }
    
    if (!empty($password) && $password !== $confirm_password) {
        $errors['confirm_password'] = 'Пароли не совпадают';
    }
    
    if (empty($gender)) {
        $errors['gender'] = 'Выберите пол';
    }
    
    if (!empty($errors)) {
    	exit;
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        header('Location: calculator.html');
    }
    
} else {
    exit;
}
