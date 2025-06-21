<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'database.php';

    $fullname  = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $email     = htmlspecialchars(trim($_POST['email'] ?? ''));
    $boyfriend = htmlspecialchars(trim($_POST['boyfriend'] ?? ''));
    $reason    = htmlspecialchars(trim($_POST['reason'] ?? ''));
    $message   = htmlspecialchars(trim($_POST['message'] ?? ''));

    $sql = "INSERT INTO bookings (fullname, email, boyfriend, reason, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fullname, $email, $boyfriend, $reason, $message]);

    header("Location: index.php?success=1");
    exit();
}
?>