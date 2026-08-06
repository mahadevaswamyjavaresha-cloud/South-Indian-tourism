<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Athirapally</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body {margin:0;font-family:Poppins;background:#eef2f3;}
.navbar {display:flex;justify-content:space-between;padding:15px 30px;background:#2e8b57;color:#fff;}
.navbar a {color:white;text-decoration:none;}

.hero {
height:70vh;
background:url('../assets/images/athirapally.jpg') no-repeat center/cover;
display:flex;align-items:center;justify-content:center;
color:white;font-size:50px;font-weight:bold;
}

.container {padding:40px;}
h2 {color:#2e8b57;}

.highlights {display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;}
.box {background:white;padding:20px;border-radius:10px;text-align:center;}

.gallery {
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:15px;
}
.gallery img {
width:100%;height:150px;object-fit:cover;border-radius:10px;
}

.btn {
display:inline-block;margin-top:20px;padding:10px 20px;
background:#2e8b57;color:white;text-decoration:none;border-radius:20px;
}
</style>
</head>

<body>

<div class="navbar">
<div>🌴 Kerala</div>
<a href="../index.php">Home</a>
</div>

<div class="hero">Athirapally 💧</div>

<div class="container">

<h2>About</h2>
<p>Largest waterfall in Kerala, known as Niagara of India.</p>

<h2>Highlights</h2>
<div class="highlights">
<div class="box">💧 Waterfalls</div>
<div class="box">🌳 Forest</div>
<div class="box">📸 Photography</div>
<div class="box">🚶 Trekking</div>
</div>

<h2>Gallery</h2>
<div class="gallery">
<img src="../assets/images/athirapally1.jpg">
<img src="../assets/images/athirapally2.jpg">
<img src="../assets/images/athirapally3.jpg">
</div>

<h2>Location</h2>
<iframe src="https://www.google.com/maps?q=athirapally&output=embed"
width="100%" height="300" style="border-radius:10px;"></iframe>

<a href="../index.php" class="btn">⬅ Back</a>

</div>

</body>
</html>