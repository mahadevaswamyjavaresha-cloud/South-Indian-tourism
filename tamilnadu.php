<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tamil Nadu Tourism</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {margin:0;font-family:Poppins;background:#eef2f3;}
.navbar {position:sticky;top:0;display:flex;justify-content:space-between;padding:15px 30px;background:rgba(46,139,87,0.9);color:white;z-index:1000;}
.navbar a {color:white;margin-left:15px;text-decoration:none;}
.slider {position:relative;width:100%;height:70vh;overflow:hidden;}
.slide {position:absolute;width:100%;height:100%;opacity:0;transition:opacity 1s ease-in-out;}
.slide.active {opacity:1;}
.slider img {width:100%;height:100%;object-fit:cover;filter:brightness(70%);}
.slider-text {position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);color:white;font-size:45px;font-weight:bold;z-index:10;}
.container {padding:40px;}
h2 {text-align:center;color:#2e8b57;}
.cards {display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px;}
.card {background:white;border-radius:15px;overflow:hidden;text-decoration:none;color:black;transition:0.3s;box-shadow:0 5px 15px rgba(0,0,0,0.2);}
.card:hover {transform:translateY(-10px);}
.card img {width:100%;height:230px;object-fit:cover;}
.card-content {padding:15px;}
.footer {text-align:center;background:#2e8b57;color:white;padding:10px;margin-top:20px;}
</style>
</head>

<body>

<div class="navbar">
<div>🛕 Tamil Nadu Tourism</div>

<div>
<a href="index.php"><i class="fas fa-home"></i> Home</a>
<a href="kerala.php"><i class="fas fa-tree"></i> Kerala</a>
<a href="karnataka.php"><i class="fas fa-mountain"></i> Karnataka</a>
<a href="tamilnadu.php"><i class="fas fa-gopuram"></i> Tamil Nadu</a>
<a href="andhra.php"><i class="fas fa-place-of-worship"></i> Andhra</a>
<a href="profile.php"><i class="fas fa-user"></i> Profile</a>
<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
</div>

<div class="slider">
<div class="slide active"><img src="assets/images/ooty.jpg"></div>
<div class="slide"><img src="assets/images/meenakshi.jpg"></div>
<div class="slide"><img src="assets/images/marina.jpg"></div>
<div class="slider-text">Explore Tamil Nadu</div>
</div>

<div class="container">
<h2>Tamil Nadu Highlights</h2>

<div class="cards">

<!-- Beaches -->
<a href="pages/tamilnadu_beaches.php" class="card">
<img src="assets/images/marina.jpg">
<div class="card-content">
<h3>Beaches</h3>
<p>Explore beautiful beaches of Tamil Nadu</p>
</div>
</a>

<!-- Temples -->
<a href="pages/tamilnadu_temples.php" class="card">
<img src="assets/images/meenakshi.jpg">
<div class="card-content">
<h3>Temples</h3>
<p>Visit famous temples and spiritual places</p>
</div>
</a>

<!-- Hill Stations -->
<a href="pages/tamilnadu_hillstations.php" class="card">
<img src="assets/images/ooty.jpg">
<div class="card-content">
<h3>Hill Stations</h3>
<p>Enjoy the scenic hill stations of Tamil Nadu</p>
</div>
</a>

<!-- Wildlife -->
<a href="pages/mudumalai.php" class="card">
<img src="assets/images/mudumalai.jpg">
<div class="card-content">
<h3>Mudumalai National Park</h3>
<p>Explore Mudumalai National Park, famous for tigers, elephants, deer, and wildlife safaris.</p>
</div>
</a>

<!-- Ooty -->
<a href="pages/ooty.php" class="card">
<img src="assets/images/ooty.jpg">
<div class="card-content">
<h3>Ooty</h3>
<p>Queen of Hill Stations</p>
</div>
</a>

<!-- Mahabalipuram -->
<a href="pages/mahabalipuram.php" class="card">
<img src="assets/images/mahabalipuram.jpg">
<div class="card-content">
<h3>Mahabalipuram</h3>
<p>UNESCO World Heritage Site</p>
</div>
</a>

</div>
</div>

<div class="footer">
© 2026 South India Tourism
</div>

<script>
let slides = document.querySelectorAll(".slide");
let index = 0;

function showSlide(i){
    slides.forEach(slide => slide.classList.remove("active"));
    slides[i].classList.add("active");
}

setInterval(() => {
    index = (index + 1) % slides.length;
    showSlide(index);
}, 4000);
</script>

</body>
</html>