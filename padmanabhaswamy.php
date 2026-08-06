<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.html");
    exit();
}
?>
<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.html");
}
?>

<h1>Welcome to Wayanad</h1>
<a href="index.php">Back</a>