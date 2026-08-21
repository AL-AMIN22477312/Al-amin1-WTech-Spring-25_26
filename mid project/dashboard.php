<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Session & Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="icon">👋</div>

    <h2>Dashboard</h2>

    <div class="info">

        <p class="welcome">
            Welcome,
            <strong><?php echo htmlspecialchars($username); ?></strong>
        </p>

        <p>
            Your username is currently stored in the
            <strong>PHP Session</strong>.
        </p>

    </div>

    <div class="buttons">

        <a href="cookie.php" class="btn">
            🍪 View Cookie
        </a>

        <a href="logout.php" class="btn logout-btn">
            🚪 Logout
        </a>

    </div>

</div>

</body>
</html>