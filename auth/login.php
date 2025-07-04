<?php
// Start output buffering to prevent header issues
ob_start();

require_once '../bootstrap.php';

// Basic login handler - you'll need to implement proper authentication
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Clear any output that might have been generated
    ob_clean();
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // TODO: Implement proper authentication logic here
    // - Verify credentials against database
    // - Set session variables
    // - Redirect to home page

    // For now, simulate successful login and set session
    if ($email && $password) {
        session_start();

        // Simulate getting user data (in real app, this would come from database)
        // For demo purposes, we'll use the email to create a name
        $emailParts = explode('@', $email);
        $firstName = ucfirst($emailParts[0]); // Use email prefix as first name
        $lastName = 'User'; // Default last name for demo

        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_first_name'] = $firstName;
        $_SESSION['user_last_name'] = $lastName;
        $_SESSION['user_email'] = $email;

        // Temporary success redirect
        header('Location: /pages/home/index.php');
        exit();
    } else {
        // Redirect back with error
        header('Location: /index.php?error=invalid_credentials');
        exit();
    }
} else {
    // Redirect to login page if not POST request
    header('Location: /index.php');
    exit();
}
?>