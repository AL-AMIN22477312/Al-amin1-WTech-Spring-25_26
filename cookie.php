<?php

if (isset($_COOKIE["remember_user"])) {

    $username = $_COOKIE["remember_user"];

} else {

    $username = "No cookie found";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie | Session & Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="icon">🍪</div>

    <h2>Cookie Information</h2>

    <div class="info">

        <p>Remembered Username</p>

        <strong class="cookie-value">
            <?php echo htmlspecialchars($username); ?>
        </strong>

    </div>

    <p class="description">
        This username is retrieved from the
        <strong>browser cookie</strong>.
    </p>

    <a href="dashboard.php" class="btn">
        ← Back to Dashboard
    </a>

</div>

</body>
</html>