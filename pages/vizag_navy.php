<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Vizag Navy Base</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{margin:0;font-family:Poppins;background:#eef2f3;}

.navbar{
display:flex;
justify-content:space-between;
padding:15px 30px;
background:#003366;
color:white;
}

.navbar a{
color:white;
text-decoration:none;
margin-left:15px;
}

.hero{
height:60vh;
background:url('../assets/images/navy.jpg') no-repeat center/cover;
display:flex;
align-items:center;
justify-content:center;
color:white;
font-size:45px;
font-weight:bold;
}

.container{
padding:40px;
}

h2{
color:#003366;
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
box-shadow:0 2px 8px rgba(0,0,0,0.1);
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
background:#003366;
color:white;
text-decoration:none;
border-radius:20px;
}

.btn:hover{
background:#00509e;
}
</style>
</head>

<body>

<div class="navbar">
<div>⚓ Andhra Pradesh</div>

<div>
<a href="../index.php">Home</a>
<a href="../andhra.php">Back</a>
</div>
</div>

<div class="hero">Vizag Navy Base ⚓</div>

<div class="container">

<h2>About</h2>

<p>
The Vizag Navy Base, located in Visakhapatnam, is the headquarters of the
Eastern Naval Command of the Indian Navy. It is one of the largest and most
important naval bases in India, protecting the country's eastern coastline.
The base is home to modern warships, submarines, and advanced naval
facilities. Nearby attractions include the INS Kurusura Submarine Museum,
TU-142 Aircraft Museum, RK Beach, and Victory at Sea Memorial.
</p>

<h2>Highlights</h2>

<div class="highlights">
<div class="box">⚓ Eastern Naval Command</div>
<div class="box">🚢 Warships & Submarines</div>
<div class="box">🛡️ Naval Heritage</div>
<div class="box">🌊 Bay of Bengal Coast</div>
</div>

<h2>Gallery</h2>

<div class="gallery">
<img src="../assets/images/navy1.jpg">
<img src="../assets/images/navy2.jpg">
<img src="../assets/images/navy3.jpg">
</div>

<h2>Location</h2>

<iframe
src="https://www.google.com/maps?q=Vizag%20Naval%20Base&output=embed"
width="100%"
height="300">
</iframe>

<a href="../andhra.php" class="btn">⬅ Back</a>

</div>

</body>
</html>





