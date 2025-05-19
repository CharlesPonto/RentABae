<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'config.php';

    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $boyfriend = $_POST['boyfriend'] ?? '';
    $reason = $_POST['reason'] ?? '';
    $message = $_POST['message'] ?? '';

    $sql = "INSERT INTO bookings (fullname, email, boyfriend, reason, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fullname, $email, $boyfriend, $reason, $message]);

    header("Location: index.php?success=1");
    exit();
}
