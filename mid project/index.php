<?php

session_start();

if (isset($_POST["login"])) {

    $username = trim($_POST["username"]);

    // Store username in session
    $_SESSION["username"] = $username;

    // Create cookie if Remember Me is checked
    if (isset($_POST["remember"])) {
        setcookie(
            "remember_user",
            $username,
            time() + (86400 * 30),
            "/"
        );
    }

    header("Location: dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Session & Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="icon">🔐</div>

    <h2>Welcome Back</h2>
    <p class="subtitle">Login to continue</p>

    <form method="POST">

        <label for="username">Username</label>

        <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter your username"
            required
        >

        <label class="remember">
            <input
                type="checkbox"
                name="remember"
            >
            <span>Remember Me</span>
        </label>

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>
</html>