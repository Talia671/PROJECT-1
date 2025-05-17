<?php
$error = "";
if (isset($_GET['error'])) {
    $error = "Username atau Password salah";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Halaman Login</h2>
        <form action="login.php" method="POST">
            <label>Email:</label><br>
            <input type="text" name="username" required><br><br>
            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Masuk"><br>
            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
        </form>
        <br>
    </div>
</body>
</html>
