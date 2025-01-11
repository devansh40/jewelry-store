<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="form-container">
        <h1>Register</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit" class="button">Register</button>
            <a href="login.php">Already have an account? Login here</a>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Registration successful!</p>";
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>