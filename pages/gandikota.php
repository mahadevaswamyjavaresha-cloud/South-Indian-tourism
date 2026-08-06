<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Gandikota</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:Poppins;
    background:#eef2f3;
}

.navbar{
    display:flex;
    justify-content:space-between;
    padding:15px 30px;
    background:#2e8b57;
    color:white;
}

.navbar a{
    color:white;
    text-decoration:none;
    margin-left:15px;
}

.hero{
    height:60vh;
    background:url('../assets/images/apgk1.jpg') no-repeat center/cover;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-size:45px;
    font-weight:bold;
    text-shadow:2px 2px 8px black;
}

.container{
    padding:40px;
}

h2{
    color:#2e8b57;
}

.highlights,.gallery{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:20px;
}

.box{
    background:white;
    padding:20px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.gallery img{
    width:100%;
    height:200px;
    object-fit:cover;
    border-radius:10px;
}

.btn{
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

<div class="navbar">
<div>🏞️ Andhra Pradesh</div>

<div>
<a href="../index.php">Home</a>
<a href="../andhra.php">Back</a>
</div>
</div>

<div class="hero">
Gandikota 🏞️
</div>

<div class="container">

<h2>About</h2>

<p>
Gandikota is one of the most spectacular tourist destinations in Andhra Pradesh.
Known as the <b>"Grand Canyon of India"</b>, it is famous for its breathtaking gorge
formed by the Penna River flowing through the Erramala Hills. The ancient Gandikota
Fort, beautiful temples, and scenic viewpoints make it a perfect destination for
history lovers, photographers, and adventure enthusiasts.
</p>

<h2>Highlights</h2>

<div class="highlights">
<div class="box">🏰 Gandikota Fort</div>
<div class="box">🌄 Grand Canyon View</div>
<div class="box">🏛️ Madhavaraya Temple</div>
<div class="box">📸 Camping & Photography</div>
</div>

<h2>Gallery</h2>

<div class="gallery">
<img src="../assets/images/apgk1.jpg">
<img src="../assets/images/apgk2.jpg">
<img src="../assets/images/apgk3.jpg">
</div>

<h2>Location</h2>

<iframe
src="https://www.google.com/maps?q=Gandikota&output=embed"
width="100%"
height="300">
</iframe>

<a href="../andhra.php" class="btn">⬅ Back</a>

</div>

</body>
</html>