<?php

session_start();
require_once '../php/config.php';

//handling registration and login logic
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

//checking if the email is already registered
    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered!'; //setting an error message if the email is already in use
        $_SESSION['active_form'] = 'register';
    } else {
    //  inserting the new user into the database
        $conn->query("INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')");

    }
//redirecting back to the index page after registration
    header("Location: ../php/index.php");
    exit();
}
//handling login logic
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

//checking if the email exists in the database
    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result-> fetch_assoc();
        if(password_verify($password, $user['password'])) {
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];

            if ($user['role'] === 'admin') {
                header("Location: ../php/admin_dashboard.php");
            } else {
                header("Location: ../php/user_page.php");
            }
            exit();
        }   
    }

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: ../php/index.php");
    exit();
}
?>