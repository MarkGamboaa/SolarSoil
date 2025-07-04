<?php
// Start output buffering to prevent header issues
ob_start();

require_once '../bootstrap.php';

// Basic signup handler - you'll need to implement proper user registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Clear any output that might have been generated
    ob_clean();

    $firstName = htmlspecialchars(trim($_POST['first_name']), ENT_QUOTES, 'UTF-8');
    $lastName = htmlspecialchars(trim($_POST['last_name']), ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Basic validation
    if (!$firstName || !$lastName || !$email || !$password) {
        header('Location: /index.php?error=missing_fields');
        exit();
    }

    if ($password !== $confirmPassword) {
        header('Location: /index.php?error=password_mismatch');
        exit();
    }

    if (strlen($password) < 8) {
        header('Location: /index.php?error=password_too_short');
        exit();
    }

    // TODO: Implement proper user registration logic here
    // - Check if email already exists
    // - Hash password
    // - Save user to database
    // - Set session variables
    // - Send welcome email

    // Start session and store user data
    session_start();

    $_SESSION['user_logged_in'] = true;
    $_SESSION['user_first_name'] = $firstName;
    $_SESSION['user_last_name'] = $lastName;
    $_SESSION['user_email'] = $email;

    // For now, redirect to home page
    header('Location: /pages/home/index.php?signup=success');
    exit();
} else {
    // Redirect to signup page if not POST request
    header('Location: /index.php');
    exit();
}
?>