<?php
    session_start();
    $mysqli = new mysqli("localhost","root","","registration");
    $err = array();
    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }

    if(isset($_POST['password1'])&&isset($_POST['password2'])){
        //set username password email
        $reg_username = $_POST['reg_username'];
        $reg_email = $_POST['reg_email'];
        if($_POST['password1'] !== $_POST['password2']){
            array_push($err,'two passwords are not identical');
        }else{
            $reg_password = md5($_POST['password1']);
            // Perform query
            $username_query = "SELECT * FROM users WHERE username='$reg_username';";
            $email_query = "SELECT * FROM users WHERE email='$reg_email';";
            $result_username = $mysqli -> query($username_query);
            $result_email = $mysqli -> query($email_query);
            $num_row_username = $result_username -> num_rows;
            $num_row_email = $result_email -> num_rows;
            // if num_row_email === 1 -> email used -> raise email used
            // if num_row_username ===1 -> raise username used
            if($num_row_email===1){
                array_push($err,"email used");
            }
            if($num_row_username===1){
                array_push($err,'username used');
            }
            if ($num_row_username===0 && $num_row_email===0) {
                $_SESSION['username'] = $reg_username;
                $query_insert = "INSERT INTO users (id,username,email,password) 
                VALUE (NULL,'$reg_username','$reg_email','$reg_password')";
                $insert_status = $mysqli -> query($query_insert);
                header("location: first.php");
            }
        }
    }
    // if login(s) is set -> query in database -> raise error or redirect to first
    if(isset($_POST['login_username'])&&isset($_POST['login_password'])){
        $login_username = $_POST['login_username'];
        $login_password = $_POST['login_password'];
        $login_en_pass = md5($login_password);
        $query_login = "SELECT * FROM users WHERE username='$login_username' AND password ='$login_en_pass';";
        $login_query_result = $mysqli -> query($query_login);
        if($login_query_result -> num_rows === 1){
            $_SESSION['username'] = $login_username;
            header('location: first.php');
        }else{
            array_push($err,'wrong combination password and username');
        }
    }

    $_SESSION['error'] = $err;
?>