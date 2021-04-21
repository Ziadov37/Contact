<?php

// include_once '/database.php';

// $connexion = new db();

class auth
{
    function login()
    {
        if (isset($_POST['submit'])) {
            header('location:contact.php');
        }
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        // $sql = "INSERT INTO `users`(`name`,`email`) Values ('$email', '$password')";
        // if (conn->query($sql) == TRUE) {
        //     header('location:../View/login.php');
        // } else {
        //     echo "error";
        // }
    }
    function register()
    {
        if (isset($_POST['submit'])) {
            header('location:contact.php');
        }
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        // $sql = "INSERT INTO `users`(`name`,`email`) Values ('$email', '$password')";
        // if (conn->query($sql) == TRUE) {
        //     header('location:../View/login.php');
        // } else {
        //     echo "error";
        // }
    }
}