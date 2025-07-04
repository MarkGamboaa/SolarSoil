<?php
// Start output buffering to prevent header issues
ob_start();

// Start session
session_start();

// Clear any output that might have been generated
ob_clean();

// Destroy all session data
session_destroy();

// Redirect to login page
header('Location: /index.php?logout=success');
exit();
?>