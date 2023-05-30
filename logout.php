
<?php include("connection.php") ?>

<?php
session_start(); // Start the session

// Check if the user is already logged out
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Destroy the session data
session_destroy();

// Redirect the user to the login page
header('Location: index.php');
exit();
?>
