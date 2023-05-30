<?php
    session_start();
    if(!isset($_SESSION['username'])){
        session_destroy();
        header("location: login.php");
    }
    if(isset($_GET['logout'])){
        session_destroy();
        header("location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php include 'errors.php'; ?>
    <p><?php echo $_SESSION['username'];  ?></p>
    <a href="first.php?logout=1" style='color:red;'>LOG OUT</a>
    
</body>
<style>
/* {
    margin = 0;
    padding = 0;
    text-align = center;
}*/
</style>
</html>