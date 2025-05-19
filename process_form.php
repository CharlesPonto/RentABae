<?php
// process_form.php
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $boyfriend = htmlspecialchars(trim($_POST['boyfriend'] ?? ''));
    $reason = htmlspecialchars(trim($_POST['reason'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Placeholder table/fields - change as needed
    $stmt = $pdo->prepare('INSERT INTO bookings (fullname, email, boyfriend, reason, message) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$fullname, $email, $boyfriend, $reason, $message]);

    echo '<script>alert("Thank you for booking a bae! We will contact you soon."); window.location.href = "index.php";</script>';
    exit;
} else {
    header('Location: index.php');
    exit;
} 