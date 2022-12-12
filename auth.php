<?php

    include 'database/conn.php';
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(isset($_POST['login']))
    {
        if($email == "admin@gmail.com" && $password=="admin12345")
        {
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            echo "<script>alert('ADMIN Login Successfully ...')</script>";
            echo "<script>window.location.href='home.php  '</script>";
        }
        else
        {
            $sql = "SELECT * from user where email='$email' and password='$password'";
            $res = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($res);
            if(is_array($row))
            {
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                echo "<script>alert('Successfully Login ...')</script>";
                echo "<script>window.location.href='home.php  '</script>";
            }
            else
            {
                echo "<script>alert('Email and Passwors are Incorrect ...')</script>";
                echo "<script>window.location.href='index.php  '</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Email and Passwors are Incorrect ...')</script>";
        echo "<script>window.location.href='index.php  '</script>";
    }

?>