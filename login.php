<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($password === $row['password']) {

            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            header("Location: index.php");
            exit();

        } else {

            echo "<script>
                    alert('Wrong Password');
                    window.location='login.php';
                  </script>";
            exit();
        }

    } else {

        echo "<script>
                alert('Email Not Found');
                window.location='login.php';
              </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;
    background:linear-gradient(-45deg,#1e3c72,#2a5298,#00c6ff,#0072ff);
    background-size:400% 400%;
    animation:gradientBG 10s ease infinite;
}

@keyframes gradientBG{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

.login-box{
    width:340px;
    padding:30px;
    text-align:center;
    border-radius:15px;
    backdrop-filter:blur(10px);
    background:rgba(255,255,255,0.12);
    color:white;
    box-shadow:0 0 20px rgba(0,0,0,0.3);
}

.login-box h2{
    margin-bottom:20px;
}

input{
    width:90%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:20px;
    text-align:center;
    font-size:15px;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:20px;
    background:#00c6ff;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    background:#0072ff;
}

a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

a:hover{
    text-decoration:underline;
}
</style>

</head>
<body>

<div class="login-box">

<h2>Login</h2>

<form method="POST">

    <input type="email" name="email" placeholder="Enter Email" required>

    <input type="password" name="password" placeholder="Enter Password" required>

    <button type="submit">Login</button>

</form>

<br>

<p>Don't have an account?</p>

<a href="signup.php">Create Account</a>

</div>

</body>
</html>