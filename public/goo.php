<?php
require_once '../config/gooconf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $event_type = trim($_POST['event_type']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($email) || empty($phone) || empty($event_type)) {
        echo "Пожалуйста, заполните все обязательные поля.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Некорректный адрес электронной почты.";
        exit;
    }

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);
    $event_type = htmlspecialchars($event_type);
    $message = htmlspecialchars($message);

    // Редирект на страницу благодарности
    header('Location: /boxpodarunok/public/ty.php');
    exit;
}
?>
