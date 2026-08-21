<?php

session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout | Session & Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="icon">✅</div>

    <h2>Logout Successful</h2>

    <div class="success">
        <p>
            Your session has been successfully destroyed.
        </p>
    </div>

    <a href="index.php" class="btn">
        ← Back to Login
    </a>

</div>

</body>
</html>