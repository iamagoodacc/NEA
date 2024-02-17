<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <style>
        .custom-password-input {
            font-family: monospace;
            letter-spacing: 5px;
            color: transparent;
            text-shadow: 0 0 0 black;
        }
    </style>
</head>
<body>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">login</button>
    </form>
</body>
</html>
