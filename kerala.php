<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Kerala Tourism</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {margin:0;font-family:Poppins;background:#eef2f3;}

/* NAVBAR */
.navbar {
position:sticky;
top:0;
display:flex;
justify-content:space-between;
padding:15px 30px;
background:rgba(46,139,87,0.9);
color:white;
z-index:1000;
}
.navbar a {
color:white;
margin-left:15px;
text-decoration:none;
}

/* SLIDER */
.slider {
position:relative;
}

.slider img {
width:100%;
height:70vh;
object-fit:cover;
filter:brightness(70%);
}

.slider-text {
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
color:white;
font-size:45px;
font-weight:bold;
}

/* CONTENT */
.container {padding:40px;}
h2 {text-align:center;color:#2e8b57;}

/* CARDS */
.cards {
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
}

.card {
background:white;
border-radius:15px;
overflow:hidden;
text-decoration:none;
color:black;
transition:0.3s;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.card:hover {transform:translateY(-10px);}

.card img {
width:100%;
height:180px;
object-fit:cover;
}

.card-content {padding:15px;}

/* FOOTER */
.footer {
text-align:center;
background:#2e8b57;
color:white;
padding:10px;
margin-top:20px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
<div>🌴 Kerala Tourism</div>
<div>
<a href="index.php"><i class="fas fa-home"></i> home</a>
<a href="kerala.php"><i class="fas fa-tree"></i> Kerala</a>
<a href="karnataka.php"><i class="fas fa-mountain"></i> Karnataka</a>
<a href="tamilnadu.php"><i class="fas fa-gopuram"></i> Tamil Nadu</a>
<a href="andhra.php"><i class="fas fa-place-of-worship"></i> Andhra</a>
<a href="profile.php"><i class="fas fa-user"></i> Profile</a>
<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
</div>

<!-- SLIDER -->
<div class="slider">
<img id="sliderImage" src="assets/images/kerala1.jpg">

<div class="slider-text">
Explore Kerala
</div>
</div>

<!-- CONTENT -->
<div class="container">

<h2>Kerala Highlights</h2>

<div class="cards">

<a href="pages/beaches.php" class="card">
<img src="assets/images/beach.jpg">
<div class="card-content">
<h3>Beaches</h3>
<p>Kovalam & Varkala</p>
</div>
</a>

<a href="pages/backwaters.php" class="card">
<img src="assets/images/backwater.jpg">
<div class="card-content">
<h3>Backwaters</h3>
<p>Alleppey houseboats</p>
</div>
</a>

<a href="pages/temples.php" class="card">
<img src="assets/images/temple.jpg">
<div class="card-content">
<h3>Temples</h3>
<p>Famous temples</p>
</div>
</a>

<a href="pages/munnar.php" class="card">
<img src="assets/images/munnar.jpg">
<div class="card-content">
<h3>Munnar</h3>
<p>Hill station</p>
</div>
</a>

<a href="pages/athirapally.php" class="card">
<img src="assets/images/athirapally.jpg">
<div class="card-content">
<h3>Athirapally</h3>
<p>Waterfall</p>
</div>
</a>

<a href="pages/wayanad.php" class="card">
<img src="assets/images/wayanad.jpg">
<div class="card-content">
<h3>Wayanad</h3>
<p>Nature & wildlife</p>
</div>
</a>

</div>

</div>

<!-- FOOTER -->
<div class="footer">
© 2026 South India Tourism
</div>

<!-- SLIDER SCRIPT -->
<script>
let images = [
"assets/images/kerala1.jpg",
"assets/images/beach.jpg",
"assets/images/backwater.jpg",
"assets/images/munnar.jpg"
];

let i = 0;

setInterval(() => {
i = (i + 1) % images.length;
document.getElementById("sliderImage").src = images[i];
}, 3000);
</script>

</body>
</html>