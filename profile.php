<?php
session_start();
include("db.php");

// check login
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

$email = $_SESSION['email'];

// get user data from database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #2e8b57, #006400);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
}

.profile-box{
    width:350px;
    padding:30px;
    background:white;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.3);
    text-align:center;
    animation: fadeIn 1s ease;
}

.profile-box h2{
    color:#2e8b57;
    margin-bottom:20px;
}

.profile-info{
    text-align:left;
    margin:15px 0;
}

.profile-info p{
    margin:8px 0;
    font-size:15px;
}

.label{
    font-weight:bold;
    color:#333;
}

.value{
    color:#555;
}

/* Buttons */
.btn{
    display:inline-block;
    margin:10px 5px;
    padding:10px 15px;
    border:none;
    border-radius:5px;
    text-decoration:none;
    color:white;
    font-size:14px;
    transition:0.3s;
}

.home-btn{
    background:#2e8b57;
}

.logout-btn{
    background:#d9534f;
}

.btn:hover{
    transform:scale(1.05);
    opacity:0.9;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity:0;
        transform: translateY(-20px);
    }
    to {
        opacity:1;
        transform: translateY(0);
    }
}
</style>

</head>

<body>

<div class="profile-box">

    <h2>👤 User Profile</h2>

    <div class="profile-info">
        <p><span class="label">Username:</span> 
        <span class="value"><?php echo $user['username']; ?></span></p>

        <p><span class="label">Email:</span> 
        <span class="value"><?php echo $user['email']; ?></span></p>
    </div>

    <a href="index.php" class="btn home-btn">🏠 Home</a>
    <a href="logout.php" class="btn logout-btn">🚪 Logout</a>

</div>

</body>
</html>