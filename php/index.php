<?php

session_start();

$errors = [
    'login' => $_SESSION ['login_error'] ?? '', 
    'register' => $_SESSION ['register_error'] ?? ''

];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : ''; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Link to the CSS file -->
</head>
<body>

    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form"> <!--creating a login page--> <!--using the function to set the active class based on which form should be displayed-->
            <form action="login_register.php" method="post">
                <h2>Login</h2> <!--heading and inputs for users to enter their info-->
                <?= showError($errors['login']); ?> <!--displaying error message if login fails-->
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't haven an account?<a href="#" onclick="showForm('register-form')">Register</a></p> <!--users can switch to register page-->
            </form>
       </div>

       <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form"> <!--creating the register page-->
            <form action="login_register.php" method="post">
                <h2>Register</h2> <!--heading and inputs for users to enter their info-->
                <input type="text" name="name" placeholder="Enter Name" required> <!--added name-->
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <select name="role" required>
                    <option value="">--Select Role--</option> <!-- select whether they're a user or producer -->
                    <option value="user">User</option>
                    <option value="admin">Producer</option>
                </select>
                <button type="submit" name="register">Register</button>
                <p>Already have an account?<a href="#" onclick="showForm('login-form')">Login</a></p> <!-- switch to log in page -->
            </form>
       </div>

    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>