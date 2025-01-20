<?php

// Start the session
session_start();

// Function to set session variables for logged-in user
function setSession($username) {
    // Store user information in the session
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
}

// Function to check if a user is logged in
function isLoggedIn() {
    // Return true if the user is logged in, otherwise false
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}

// Function to log out the user
function logout() {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();
}

// Example usage (integrate these into the login and logout workflows):

// To set session on login:
if ($username === $correctUsername && $password === $correctPassword) {
    setSession($username);
}

// To check login status:
if (isLoggedIn()) {
    echo "Welcome, " . $_SESSION['username'];
} else {
    echo "Please log in.";
}

// To log out:
logout();
?>
