<?php
session_start();
include('dbcon.php');

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1 ";
    $login_query_run = mysqli_query($con,$login_query);
    if(mysqli_num_rows($login_query_run) > 0)
    {

        $userdata = mysqli_fetch_array($login_query_run);

        $user_id = $userdata['id'];
        $username = $userdata['fullname'];
        $_SESSION['auth_user_id'] = $user_id;
        $_SESSION['authuser_name'] = $username;

        $_SESSION['status'] = "Login Success";
        header('location:index.php');
        exit();

    }else{
        $_SESSION['status'] = "Invalid Email or Password";
        header('location:index.php');
        exit();
    }
}


?>