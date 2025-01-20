<?php
include "database.php";
// Database connection setup (change these values as needed)
// These variables store the database connection details
$host = 'localhost';
$dbname = 'films';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance to connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle database connection errors securely
    die("Database connection failed: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8'));
}

// Function to sanitize input
// This prevents XSS attacks by escaping special characters in user input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Function to register a new user
function registerUser($pdo, $username, $plainPassword) {
    // Hash the password securely using bcrypt
    $hashedPassword = password_hash($plainPassword, PASSWORD_BCRYPT);

    // Prepare the SQL statement to insert a new user
    // Using prepared statements helps prevent SQL injection
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);

    // Execute the statement and provide feedback
    if ($stmt->execute()) {
        echo "User registered successfully.";
    } else {
        echo "Error registering user.";
    }
}

// Function to validate user login
function validateUser($pdo, $username, $plainPassword) {
    // Prepare the SQL statement to fetch the user by username
    // This ensures only the matching user is retrieved
    $stmt = $pdo->prepare("SELECT password FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Fetch the user's data as an associative array
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the input password against the stored hashed password
    if ($user && password_verify($plainPassword, $user['password'])) {
        echo "Login successful.";
    } else {
        echo "Invalid username or password.";
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize all user inputs to prevent XSS attacks
    $action = sanitizeInput($_POST['action']);
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    // Determine the action to perform based on the submitted form
    if ($action === 'register') {
        registerUser($pdo, $username, $password);
    } elseif ($action === 'login') {
        validateUser($pdo, $username, $password);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration & Login</title>
</head>
<body>
    <h2>Register</h2>
    <!-- Form for user registration -->
    <form method="POST">
        <!-- Hidden field to specify the action as 'register' -->
        <input type="hidden" name="action" value="register">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Register</button>
    </form>

    <h2>Login</h2>
    <!-- Form for user login -->
    <form method="POST">
        <!-- Hidden field to specify the action as 'login' -->
        <input type="hidden" name="action" value="login">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
