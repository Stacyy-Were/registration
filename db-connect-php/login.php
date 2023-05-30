<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>
<body>
    <h1>LOG IN</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <?php include 'errors.php' ?>
        <div class="input-group">
            <h1>USERNAME</h1>
            <input type="text" name='login_username'>
        </div>
        <div class="input-group">
            <h1>PASSWORD</h1>
            <input type="text" name='login_password'>
        </div>
        <div class="input-group">
            <input type="submit" value='login'>
        </div>
        <div class="input-group">
            <h1>Didn't have a account yet?</h1>
            <a href="register.php">sign up</a>
        </div>
    </form>
</body>
</html>
