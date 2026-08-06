<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Mysore</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{margin:0;font-family:Poppins;background:#eef2f3;}
.navbar{display:flex;justify-content:space-between;padding:15px 30px;background:#2e8b57;color:white;}
.navbar a{color:white;text-decoration:none;margin-left:15px;}

.hero{
height:60vh;
background:url('../assets/images/mysore.jpg') no-repeat center/cover;
display:flex;align-items:center;justify-content:center;
color:white;font-size:45px;font-weight:bold;
}

.container{padding:40px;}
h2{color:#2e8b57;}

.highlights,.gallery{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:20px;
}

.box{background:white;padding:20px;border-radius:10px;text-align:center;}
.gallery img{width:100%;height:300px;object-fit:cover;border-radius:10px;}

.btn{
display:inline-block;margin-top:20px;padding:10px 20px;
background:#2e8b57;color:white;text-decoration:none;border-radius:20px;
}
</style>
</head>

<body>

<div class="navbar">
<div>🏞️ Karnataka</div>
<div>
<a href="../index.php">Home</a>
<a href="../karnataka.php">Back</a>
</div>
</div>

<div class="hero">Mysore 🏰</div>

<div class="container">
<h2>About</h2>
<p>Mysore is known for palaces, heritage and culture.</p>

<h2>Highlights</h2>
<div class="highlights">
<div class="box">🏰 Mysore Palace</div>
<div class="box">🎉 Dasara Festival</div>
<div class="box">🛍️ Silk Sarees</div>
<div class="box">🌸 Gardens</div>
</div>

<h2>Gallery</h2>
<div class="gallery">
<img src="../assets/images/mysore1.jpg">
<img src="../assets/images/mysore2.jpg">
<img src="../assets/images/mysore3.jpg">
</div>

<h2>Location</h2>
<iframe src="https://www.google.com/maps?q=mysore&output=embed"
width="100%" height="300"></iframe>

<a href="../karnataka.php" class="btn">⬅ Back</a>
</div>

</body>
</html>