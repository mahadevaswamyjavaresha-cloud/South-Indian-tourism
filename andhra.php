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
<title>Andhra Pradesh Tourism</title>

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
<div>🛕 Andhra Pradesh Tourism</div>

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
<div class="slide active"><img src="assets/images/tirupati.jpg"></div>
<div class="slide"><img src="assets/images/araku.jpg"></div>
<div class="slide"><img src="assets/images/gandikota.jpg"></div>
<div class="slider-text">Explore Andhra Pradesh</div>
</div>

<div class="container">

<h2>Andhra Pradesh Highlights</h2>

<div class="cards">

<!-- Beaches -->
<a href="pages/andhra_beaches.php" class="card">
<img src="assets/images/rkbeach.jpg">
<div class="card-content">
<h3>Beaches</h3>
<p>Relax at the beautiful beaches of Andhra Pradesh.</p>
</div>
</a>

<!-- Temples -->
<a href="pages/andhra_temples.php" class="card">
<img src="assets/images/tirupati.jpg">
<div class="card-content">
<h3>Temples</h3>
<p>Visit the famous Tirupati Balaji Temple and other sacred places.</p>
</div>
</a>

<!-- Caves -->
<a href="pages/andhra_caves.php" class="card">
<img src="assets/images/araku.jpg">
<div class="card-content">
<h3>Caves</h3>
<p>Explore the famous caves of Andhra Pradesh, including Borra Caves, Belum Caves, Undavalli Caves, Mogalarajapuram Caves, and Yaganti Caves.</p>
</div>
</a>

<a href="pages/vizag_navy.php" class="card">
    <img src="assets/images/navy.jpg">
    <div class="card-content">
        <h3>⚓ Visakhapatnam Naval Heritage</h3>
        <p>Explore India's Eastern Naval Command, Hindustan Shipyard, and the famous Submarine Museum.</p>
    </div>
</a>

<!-- RK Beach -->
<a href="pages/rkbeach.php" class="card">
<img src="assets/images/rkbeach.jpg">
<div class="card-content">
<h3>RK Beach</h3>
<p>Enjoy the beautiful coastline of Visakhapatnam.</p>
</div>
</a>

<!-- Gandikota -->
<a href="pages/gandikota.php" class="card">
<img src="assets/images/gandikota.jpg">
<div class="card-content">
<h3>Gandikota</h3>
<p>Discover the Grand Canyon of India and its historic fort.</p>
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
    slides.forEach(s => s.classList.remove("active"));
    slides[i].classList.add("active");
}

setInterval(() => {
    index = (index + 1) % slides.length;
    showSlide(index);
}, 4000);
</script>

</body>
</html>