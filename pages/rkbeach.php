<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>RK Beach</title>
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
background:url('../assets/images/rkbeach.jpg') no-repeat center/cover;
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
<div>🏖️ Andhra Pradesh</div>

<div>
<a href="../index.php">Home</a>
<a href="../andhra.php">Back</a>
</div>
</div>

<div class="hero">RK Beach 🌊</div>

<div class="container">

<h2>About</h2>

<p>
Ramakrishna Beach, popularly known as RK Beach, is one of the most famous
tourist attractions in Visakhapatnam, Andhra Pradesh. Located along the Bay
of Bengal, it is known for its golden sand, beautiful sunrise views, cool sea
breeze, and lively atmosphere. The beach is surrounded by attractions such as
the INS Kurusura Submarine Museum, TU-142 Aircraft Museum, and Victory at Sea
Memorial, making it a favorite destination for tourists and families.
</p>

<h2>Highlights</h2>

<div class="highlights">
<div class="box">🌊 Beautiful Beach</div>
<div class="box">🌅 Sunrise Views</div>
<div class="box">🏛️ Nearby Museums</div>
<div class="box">🚶 Evening Walks</div>
</div>

<h2>Gallery</h2>

<div class="gallery">
<img src="../assets/images/aprk1.jpg">
<img src="../assets/images/aprk2.jpg">
<img src="../assets/images/aprk3.jpg">
</div>

<h2>Location</h2>

<iframe
src="https://www.google.com/maps?q=RK%20Beach%20Visakhapatnam&output=embed"
width="100%"
height="300">
</iframe>

<a href="../andhra.php" class="btn">⬅ Back</a>

</div>

</body>
</html>