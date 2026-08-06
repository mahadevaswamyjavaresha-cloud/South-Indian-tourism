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
<title>South India Tourism</title>

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
background:rgba(46,139,87,0.95);
color:white;
z-index:1000;
}
.navbar a {
color:white;
margin-left:15px;
text-decoration:none;
font-weight:500;
}
.navbar a:hover {
color:#ffd700;
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

.cards {
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

.card {
background:white;
border-radius:15px;
overflow:hidden;
text-decoration:none;
color:black;
transition:0.3s;
box-shadow:0 5px 15px rgba(0, 0, 0, 0.2);
}

.card:hover {transform:translateY(-10px);}

.card img {
width:100%;
height:220px;
object-fit:cover;
}

.card-content {
padding:20px;
text-align:center;
}

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
<div>🌍 South India Tourism</div>

<div>
<a href="index.php"><i class="fas fa-home"></i> Home</a>
<a href="kerala.php"><i class="fas fa-tree"></i> Kerala</a>
<a href="karnataka.php"><i class="fas fa-mountain"></i> Karnataka</a>
<a href="tamilnadu.php"><i class="fas fa-gopuram"></i> Tamil Nadu</a>
<a href="andhra.php"><i class="fas fa-place-of-worship"></i> Andhra Pradesh</a>
<a href="profile.php"><i class="fas fa-user"></i> Profile</a>

<?php if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") { ?>
    <a href="users.php"><i class="fas fa-users"></i> View Users</a>
<?php } ?>

<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
</div>

<!-- SLIDER -->
<div class="slider">
<img id="sliderImage" src="assets/images/hampi.jpg">

<div class="slider-text">
Explore South India
</div>
</div>

<!-- CONTENT -->
<div class="container">

<h2>Select Your Destination</h2>

<div class="cards">

<!-- Kerala -->
<a href="kerala.php" class="card">
<img src="assets/images/kerala1.jpg">
<div class="card-content">
<h3>🌴 Kerala</h3>
<p>God’s Own Country</p>
</div>
</a>

<!-- Karnataka -->
<a href="karnataka.php" class="card">
<img src="assets/images/coorg.jpg">
<div class="card-content">
<h3>🏞️ Karnataka</h3>
<p>One State Many Worlds</p>
</div>
</a>
<!-- Tamil Nadu -->
<a href="tamilnadu.php" class="card">
    <img src="assets/images/tamilnadu.jpg">
    <div class="card-content">
        <h3>🛕 Tamil Nadu</h3>
        <p>Land of Temples and Heritage</p>
    </div>
</a>
<!-- Andhra Pradesh -->
<a href="andhra.php" class="card">
    <img src="assets/images/tirupati.jpg">
    <div class="card-content">
        <h3>🛕 Andhra Pradesh</h3>
        <p>Land of Temples, Beaches and Valleys</p>
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
"assets/images/coorg.jpg",
"assets/images/tamilnadu.jpg",
"assets/images/tirupati.jpg",

];

let i = 0;

setInterval(() => {
i = (i + 1) % images.length;
document.getElementById("sliderImage").src = images[i];
}, 3000);
</script>

</body>
</html>