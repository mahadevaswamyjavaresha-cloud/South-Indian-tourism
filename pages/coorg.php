<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Coorg</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body {margin:0;font-family:Poppins;background:#eef2f3;}

/* NAVBAR */
.navbar {
display:flex;
justify-content:space-between;
padding:15px 30px;
background:#2e8b57;
color:white;
}
.navbar a {
color:white;
text-decoration:none;
margin-left:15px;
}

/* HERO */
.hero {
height:60vh;
background:url('../assets/images/coorg.jpg') no-repeat center/cover;
display:flex;
align-items:center;
justify-content:center;
color:white;
font-size:45px;
font-weight:bold;
}

/* CONTENT */
.container {padding:40px;}
h2 {color:#2e8b57;}

/* HIGHLIGHTS */
.highlights {
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:20px;
}
.box {
background:white;
padding:20px;
border-radius:10px;
text-align:center;
}

/* GALLERY */
.gallery {
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:15px;
}
.gallery img {
width:100%;
height:200px;
object-fit:cover;
border-radius:10px;
}

/* BUTTON */
.btn {
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#2e8b57;
color:white;
text-decoration:none;
border-radius:20px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
<div>🏞️ Karnataka</div>
<div>
<a href="../index.php">Home</a>
<a href="../karnataka.php">Back</a>
</div>
</div>

<!-- HERO -->
<div class="hero">
Coorg 🌿
</div>

<div class="container">

<h2>About</h2>
<p>Coorg is known as the Scotland of India with coffee plantations and misty hills.</p>

<h2>Highlights</h2>
<div class="highlights">
<div class="box">🌿 Coffee Estates</div>
<div class="box">🌄 Hills</div>
<div class="box">🌊 Waterfalls</div>
<div class="box">🐘 Wildlife</div>
</div>

<h2>Gallery</h2>
<div class="gallery">
<img src="../assets/images/coorg1.jpg">
<img src="../assets/images/coorg2.jpg">
<img src="../assets/images/coorg3.jpg">
</div>

<h2>Location</h2>
<iframe src="https://www.google.com/maps?q=coorg&output=embed"
width="100%" height="300" style="border-radius:10px;"></iframe>

<a href="../karnataka.php" class="btn">⬅ Back</a>

</div>

</body>
</html>