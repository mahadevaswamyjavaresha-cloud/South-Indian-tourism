<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Poppins',sans-serif;
}

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
background:linear-gradient(90deg,#2e8b57,#006400);
padding:15px 30px;
position:sticky;
top:0;
z-index:1000;
}

.logo{
color:white;
font-size:24px;
font-weight:bold;
}

.menu{
display:flex;
align-items:center;
}

.menu a{
color:white;
text-decoration:none;
margin-left:12px;
padding:10px 14px;
border-radius:8px;
display:flex;
align-items:center;
gap:6px;
transition:.3s;
}

.menu a:hover{
background:#ffd700;
color:black;
}

.active{
background:#ffd700;
color:black !important;
font-weight:bold;
}

.hamburger{
display:none;
}

@media(max-width:768px){

.menu{
display:none;
flex-direction:column;
position:absolute;
top:70px;
right:10px;
background:#2e8b57;
width:220px;
padding:15px;
border-radius:10px;
}

.menu.show{
display:flex;
}

.menu a{
margin:8px 0;
width:100%;
}

.hamburger{
display:block;
color:white;
font-size:24px;
cursor:pointer;
}

}
</style>

</head>

<body>

<div class="navbar">

<div class="logo">
🌴 Kerala Tourism
</div>

<div class="hamburger" onclick="toggleMenu()">
<i class="fas fa-bars"></i>
</div>

<div class="menu" id="menu">

<a href="/kerala/index.php" class="<?php if($currentPage=="index.php") echo "active"; ?>">
<i class="fas fa-home"></i> Home
</a>

<a href="/kerala/pages/beaches.php" class="<?php if($currentPage=="beaches.php") echo "active"; ?>">
<i class="fas fa-umbrella-beach"></i> Beaches
</a>

<a href="/kerala/pages/backwaters.php" class="<?php if($currentPage=="backwaters.php") echo "active"; ?>">
<i class="fas fa-water"></i> Backwaters
</a>

<a href="/kerala/pages/temples.php" class="<?php if($currentPage=="temples.php") echo "active"; ?>">
<i class="fas fa-place-of-worship"></i> Temples
</a>

<a href="/kerala/profile.php" class="<?php if($currentPage=="profile.php") echo "active"; ?>">
<i class="fas fa-user"></i> Profile
</a>

<a href="/kerala/logout.php">
<i class="fas fa-sign-out-alt"></i> Logout
</a>

</div>

</div>

<script>
function toggleMenu(){
document.getElementById("menu").classList.toggle("show");
}
</script>