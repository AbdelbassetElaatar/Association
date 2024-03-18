<?php
session_start();

// Hardcoded username and password for demonstration purposes
$email = "assaithammou@gmail.com";
$password = "123";

// Check if the submitted username and password match
if ($_POST["email"] == $email && $_POST["password"] == $password) {
    // Set session variables
    $_SESSION["loggedin"] = true;
    header("Location: Pdf_edit.php"); // Redirect to the file upload page
} else {
    echo "Invalid username or password.";
}
?>
