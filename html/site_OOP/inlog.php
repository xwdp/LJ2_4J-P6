<!-- brian -->
<?php
session_start();
include "database.php";

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Function to check if an email already exists
function emailExists($pdo, $email) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt->fetchColumn() > 0;
}

// Function to check if a username already exists
function usernameExists($pdo, $username) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    return $stmt->fetchColumn() > 0;
}

// Function to register a new user
function registerUser($pdo, $email, $username, $plainPassword) {
    if (emailExists($pdo, $email)) {
        echo "This email already exists.";
        return;
    }

    if (usernameExists($pdo, $username)) {
        echo "This username already exists.";
        return;
    }

    $hashedPassword = password_hash($plainPassword, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT INTO users (email, username, password) VALUES (:email, :username, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['login_success'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo "Error registering user.";
    }
}

// Function to validate user login
function validateUser($pdo, $identifier, $plainPassword) {
    $stmt = $pdo->prepare("SELECT password FROM users WHERE username = :identifier OR email = :identifier");
    $stmt->bindParam(':identifier', $identifier);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($plainPassword, $user['password'])) {
        $_SESSION['login_success'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username/email or password.";
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? sanitizeInput($_POST['action']) : '';
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
    $username = isset($_POST['username']) ? sanitizeInput($_POST['username']) : '';
    $password = isset($_POST['password']) ? sanitizeInput($_POST['password']) : '';
    $confirmPassword = isset($_POST['confirm-password']) ? sanitizeInput($_POST['confirm-password']) : '';

    if ($action === 'register') {
        if ($password === $confirmPassword) {
            registerUser($pdo, $email, $username, $password);
        } else {
            echo "Passwords do not match.";
        }
    } elseif ($action === 'login') {
        $identifier = !empty($email) ? $email : $username;
        validateUser($pdo, $identifier, $password);
    }
}
?>
<!-- brian -->