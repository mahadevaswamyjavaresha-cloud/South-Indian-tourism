<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($password != $confirm) {

        echo "<script>
        alert('Passwords do not match');
        window.location='signup.php';
        </script>";
        exit();
    }

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {

        echo "<script>
        alert('Email already exists');
        window.location='signup.php';
        </script>";
        exit();
    }

    $sql = "INSERT INTO users(username,email,password)
            VALUES('$username','$email','$password')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
        alert('Registration Successful');
        window.location='index.php';
        </script>";
        exit();
    } else {

        echo "<script>
        alert('Registration Failed');
        window.location='signup.php';
        </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>

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

.signup-box{
width:360px;
padding:30px;
text-align:center;
border-radius:15px;
backdrop-filter:blur(10px);
background:rgba(255,255,255,0.12);
color:white;
box-shadow:0 0 20px rgba(0,0,0,0.3);
}

.signup-box h2{
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
transition:0.3s;
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

<div class="signup-box">

<h2>Create Account</h2>

<form method="POST">

<input
type="text"
name="username"
placeholder="Enter Username"
required>

<input
type="email"
name="email"
placeholder="Enter Email"
required>

<input
type="password"
name="password"
placeholder="Enter Password"
required>

<input
type="password"
name="confirm_password"
placeholder="Confirm Password"
required>

<button type="submit">Sign Up</button>

</form>

<br>

<p>Already have an account?</p>

<a href="login.php">Login</a>

</div>

</body>
</html>