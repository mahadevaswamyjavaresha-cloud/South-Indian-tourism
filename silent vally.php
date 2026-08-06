<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.html");
    exit();
}
?>

<h1>Silent Valley</h1>

<a href="index.php">Back</a>