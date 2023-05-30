<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>register</title>
</head>
<body>
    <h1>REGISTER</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <?php include 'errors.php' ?>
        <div class="input-group">
            <h1>USERNAME</h1>
            <input type="text" name='reg_username'>
        </div>
        <div class="input-group">
            <h1>EMAIL</h1>
            <input type="email" name='reg_email'>
        </div>
        <div class="input-group">
            <h1>PASSWORD</h1>
            <input type="password" name='password1'>
        </div>
        <div class="input-group">
            <h1>CONFIRM PASSWORD</h1>
            <input type="password" name='password2'>
        </div>
        <div class="input-group">
            <input type="submit" value='sign up'>
        </div>
        <div class="input-group">
            <h1>Already have a account</h1>
            <a href="login.php">login</a>
        </div>
    </form>
</body>
</html>