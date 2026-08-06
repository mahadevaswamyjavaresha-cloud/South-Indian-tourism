<?php $state = "kerala"; ?>
<?php include("../includes/header_kerala.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Kerala Temples</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body {margin:0;font-family:Poppins;background:#f4f6f8;}

.navbar {
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 30px;
    background:#2e8b57;
    color:white;
}

.logo {
    font-size:20px;
    font-weight:bold;
}

.nav-links a {
    color:white;
    text-decoration:none;
    margin:0 12px;
    padding:6px 10px;
    border-radius:5px;
    transition:0.3s;
}

.nav-links a:hover {
    background:#1f6f45;
}

/* ACTIVE PAGE */
.nav-links .active {
    background:orange;
    color:white;
}
/* SECOND NAVBAR */
.subnav {
    background:#1f7a4d;
    padding:10px;
    text-align:center;
    position:sticky;
    top:0;
    z-index:1000;
}

.subnav a {
    color:white;
    margin:0 15px;
    text-decoration:none;
    font-weight:500;
}

.subnav a:hover {
    text-decoration:underline;
}

.title {
    text-align:center;
    padding:15px;
    font-size:24px;
    color:#2e8b57;
    font-weight:bold;
}

.card {
    background:white;
    margin:20px auto;
    width:85%;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.images {
    display:flex;
    gap:20px;
    margin:15px 0;
}
.images img {
    width:48%;
    height:200px;
    object-fit:cover;
    border-radius:10px;
}

.highlights {
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    margin:10px 0;
}
.highlight-box {
    background:#e8f5e9;
    padding:8px 12px;
    border-radius:20px;
    font-size:13px;
    color:#2e8b57;
}

h2 {color:#2e8b57;}
h3 {margin-top:10px;}
</style>

</head>

<body>

<!-- NAVBAR -->

<div class="title">Kerala Temples 🛕</div>

<div class="subnav">
    <a href="#padma">Padmanabhaswamy</a>
    <a href="#guru">Guruvayur</a>
    <a href="#sabarimala">Sabarimala</a>
    <a href="#vadakkunathan">Vadakkunnathan</a>
    <a href="#ambalappuzha">Ambalappuzha</a>
</div>

<!-- 1 -->
<div class="card">
<h2>Padmanabhaswamy Temple</h2>
<div class="images">
<img src="../assets/images/temple1.jpg">
<img src="../assets/images/temple2.jpg">
</div>

<h3>About</h3>
<p>Located in Thiruvananthapuram, dedicated to Lord Vishnu.</p>

<h3>History</h3>
<p>Ancient temple connected to the Travancore royal family.</p>

<div class="highlights">
<span class="highlight-box">💰 Richest Temple</span>
<span class="highlight-box">📍 Trivandrum</span>
<span class="highlight-box">🛕 Vishnu</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Hidden vaults 🔐</li>
<li>Dravidian architecture 🏛️</li>
</ul>
</div>

<!-- 2 -->
<div class="card">
<h2>Guruvayur Temple</h2>
<div class="images">
<img src="../assets/images/temple3.jpg">
<img src="../assets/images/temple4.jpg">
</div>

<h3>About</h3>
<p>Famous Krishna temple known as Dwarka of the South.</p>

<h3>History</h3>
<p>Believed that the idol was worshipped by Lord Krishna.</p>

<div class="highlights">
<span class="highlight-box">🙏 Krishna</span>
<span class="highlight-box">📍 Thrissur</span>
<span class="highlight-box">🎉 Festivals</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Elephant procession 🐘</li>
<li>Wedding ceremonies 💍</li>
</ul>
</div>

<!-- 3 -->
<div class="card">
<h2>Sabarimala Temple</h2>
<div class="images">
<img src="../assets/images/temple5.jpg">
<img src="../assets/images/temple6.jpg">
</div>

<h3>About</h3>
<p>Major pilgrimage temple in Western Ghats.</p>

<h3>History</h3>
<p>Dedicated to Lord Ayyappa with ancient traditions.</p>

<div class="highlights">
<span class="highlight-box">🛕 Ayyappa</span>
<span class="highlight-box">⛰️ Hills</span>
<span class="highlight-box">🚶 Trek</span>
</div>

<h3>Special Features</h3>
<ul>
<li>41-day fasting 🧘</li>
<li>Makara Jyothi 🔥</li>
<li>You can got blessing Moksha 🙏</li>
</ul>
</div>

<!-- 4 -->
<div class="card">
<h2>Vadakkunnathan Temple</h2>
<div class="images">
<img src="../assets/images/temple7.jpg">
<img src="../assets/images/temple8.jpg">
</div>

<h3>About</h3>
<p>Ancient Shiva temple in Thrissur.</p>

<h3>History</h3>
<p>Believed to be built by Lord Parasurama.</p>

<div class="highlights">
<span class="highlight-box">🛕 Shiva</span>
<span class="highlight-box">📍 Thrissur</span>
<span class="highlight-box">🎆 Pooram</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Thrissur Pooram 🎆</li>
<li>Mural paintings 🎨</li>
</ul>
</div>

<!-- 5 -->
<div class="card">
<h2>Ambalappuzha Temple</h2>
<div class="images">
<img src="../assets/images/temple9.jpg">
<img src="../assets/images/temple10.jpg">
</div>

<h3>About</h3>
<p>Famous Krishna temple known for Palpayasam.</p>

<h3>History</h3>
<p>Important cultural and traditional temple in Kerala.</p>

<div class="highlights">
<span class="highlight-box">🍚 Palpayasam</span>
<span class="highlight-box">📍 Alappuzha</span>
<span class="highlight-box">🛕 Krishna</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Traditional rituals 🙏</li>
<li>Cultural programs 🎶</li>
</ul>
</div>

</body>
</html>