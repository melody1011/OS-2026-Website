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
        <div class="form-box active" id="login-form"> <!--creating a login page-->
            <form action="">
                <h2>Login</h2> <!--heading and inputs for users to enter their info-->
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't haven an account?<a href="#" onclick="showForm('register-form')">Register</a></p> <!--users can switch to register page-->
            </form>
       </div>

       <div class="form-box" id="register-form"> <!--creating the register page-->
            <form action="">
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