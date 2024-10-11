<?php
require_once '../config/gooconf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $event_type = trim($_POST['event_type']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($email) || empty($phone) || empty($event_type)) {
        echo json_encode(['status' => 'error', 'message' => "Будь ласка, заповніть усі обов'язкові поля."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => "Некоректна адреса електронної пошти."]);
        exit;
    }

    echo json_encode([
        'status' => 'success',
        'data' => [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'event_type' => $event_type,
            'message' => $message
        ]
    ]);

    exit;
}
?>
