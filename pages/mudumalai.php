<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Mudumalai National Park</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:Poppins;
    background:#eef2f3;
}

/* NAVBAR */
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

/* HERO */
.hero{
height:60vh;
background:url('../assets/images/mudumalai.jpg') no-repeat center/cover;
display:flex;
align-items:center;
justify-content:center;
color:white;
font-size:45px;
font-weight:bold;
text-shadow:2px 2px 8px black;
}

/* CONTENT */
.container{
padding:40px;
}

h2{
color:#2e8b57;
}

/* HIGHLIGHTS */
.highlights{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:20px;
}

.box{
background:white;
padding:20px;
border-radius:10px;
text-align:center;
box-shadow:0 2px 8px rgba(0,0,0,0.15);
}

/* GALLERY */
.gallery{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:15px;
}

.gallery img{
width:100%;
height:200px;
object-fit:cover;
border-radius:10px;
}

/* BUTTON */
.btn{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#2e8b57;
color:white;
text-decoration:none;
border-radius:20px;
transition:.3s;
}

.btn:hover{
background:#1f6f45;
}
</style>

</head>

<body>

<!-- NAVBAR -->
<div class="navbar">

<div>🐅 Tamil Nadu</div>

<div>
<a href="../index.php">Home</a>
<a href="../tamilnadu.php">Back</a>
</div>

</div>

<!-- HERO -->
<div class="hero">
Mudumalai National Park 🐅
</div>

<div class="container">

<h2>About</h2>

<p>
Mudumalai National Park is one of India's oldest wildlife sanctuaries, located in the Nilgiri Hills of Tamil Nadu. It is part of the Nilgiri Biosphere Reserve and is famous for its rich biodiversity, dense forests, elephants, tigers, leopards, deer, and hundreds of bird species. It is a popular destination for nature lovers and wildlife photographers.
</p>

<h2>Highlights</h2>

<div class="highlights">

<div class="box">🐘 Elephant Safari</div>

<div class="box">🐅 Tiger Reserve</div>

<div class="box">🦌 Wildlife Safari</div>

<div class="box">🦜 Bird Watching</div>

</div>

<h2>Gallery</h2>

<div class="gallery">

<img src="../assets/images/md1.jpg">

<img src="../assets/images/md2.jpg">

<img src="../assets/images/md3.jpg">

</div>

<h2>Location</h2>

<iframe
src="https://www.google.com/maps?q=Mudumalai+National+Park,Tamil+Nadu&output=embed"
width="100%"
height="300"
style="border-radius:10px;border:0;">
</iframe>

<a href="../tamilnadu.php" class="btn">⬅ Back</a>

</div>

</body>
</html>