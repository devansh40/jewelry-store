<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="form-container">
    <h1>Login</h1>
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit" class="button">Login</button>
            <a href="register.php">Do not have an account? Register here</a>
        </form>
        <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: dashboard.php");
                } else {
                    echo "<p>Invalid credentials!</p>";
                }
            } else {
                echo "<p>User not found!</p>";
            }
        }
        ?>
    </div>
</body>
</html>