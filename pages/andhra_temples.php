<?php $state = "andhra"; ?>
<?php include("../includes/header_andhra.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Andhra Pradesh Temples</title>

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

.nav-links .active {
    background:orange;
    color:white;
}

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

<div class="title">Andhra Pradesh Temples 🛕</div>

<div class="subnav">
    <a href="#tirupati">Tirupati</a>
    <a href="#srisailam">Srisailam</a>
    <a href="#kanakadurga">Kanaka Durga</a>
    <a href="#simhachalam">Simhachalam</a>
    <a href="#srikalahasti">Srikalahasti</a>
</div>

<!-- 1 -->
<div class="card" id="tirupati">

<h2>Tirumala Venkateswara Temple</h2>

<div class="images">
<img src="../assets/images/at1.jpg">
<img src="../assets/images/at2.jpg">
</div>

<h3>About</h3>
<p>Tirumala Venkateswara Temple is one of the world's richest and most visited Hindu temples dedicated to Lord Venkateswara, an incarnation of Lord Vishnu.</p>

<h3>History</h3>
<p>The temple has a history spanning over a thousand years and is managed by Tirumala Tirupati Devasthanams (TTD). Millions of devotees visit every year.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Venkateswara</span>
<span class="highlight-box">📍 Tirupati</span>
<span class="highlight-box">🙏 World's Famous Temple</span>
</div>

<h3>Special Features</h3>
<ul>
<li>One of the richest temples in the world 💰</li>
<li>Famous Laddu Prasadam 🍮</li>
<li>Millions of pilgrims every year 🙏</li>
</ul>

</div>

<!-- 2 -->
<div class="card" id="srisailam">

<h2>Srisailam Mallikarjuna Temple</h2>

<div class="images">
<img src="../assets/images/at3.jpg">
<img src="../assets/images/at4.jpg">
</div>

<h3>About</h3>
<p>Srisailam is one of the twelve Jyotirlingas of Lord Shiva and one of the eighteen Shakti Peethas in India.</p>

<h3>History</h3>
<p>This ancient temple is located on the Nallamala Hills beside the Krishna River and has been an important pilgrimage centre for centuries.</p>

<div class="highlights">
<span class="highlight-box">🕉 Lord Shiva</span>
<span class="highlight-box">📍 Srisailam</span>
<span class="highlight-box">✨ Jyotirlinga</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Jyotirlinga and Shakti Peetha in one place 🛕</li>
<li>Beautiful Nallamala forest surroundings 🌳</li>
<li>Krishna River nearby 🌊</li>
</ul>

</div>

<!-- 3 -->
<div class="card" id="kanakadurga">

<h2>Kanaka Durga Temple</h2>

<div class="images">
<img src="../assets/images/at5.jpg">
<img src="../assets/images/at6.jpg">
</div>

<h3>About</h3>
<p>Kanaka Durga Temple is a famous Hindu temple dedicated to Goddess Durga situated on Indrakeeladri Hill in Vijayawada.</p>

<h3>History</h3>
<p>The temple is believed to have been established by Arjuna and is one of the most important Shakti temples in South India.</p>

<div class="highlights">
<span class="highlight-box">🌺 Goddess Durga</span>
<span class="highlight-box">📍 Vijayawada</span>
<span class="highlight-box">🎉 Dasara Festival</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Magnificent hilltop temple ⛰️</li>
<li>Grand Dasara celebrations 🎊</li>
<li>Panoramic view of Krishna River 🌉</li>
</ul>

</div>
<!-- 4 -->
<div class="card" id="simhachalam">

<h2>Simhachalam Temple</h2>

<div class="images">
<img src="../assets/images/at7.jpg">
<img src="../assets/images/at8.jpg">
</div>

<h3>About</h3>
<p>Simhachalam Temple is one of the most famous temples in Andhra Pradesh. It is dedicated to Lord Varaha Narasimha, an incarnation of Lord Vishnu, and is located on Simhachalam Hill near Visakhapatnam.</p>

<h3>History</h3>
<p>The temple dates back to the 11th century and was patronized by the Eastern Ganga and Vijayanagara dynasties. It is renowned for its beautiful stone carvings and ancient architecture.</p>

<div class="highlights">
<span class="highlight-box">🦁 Lord Varaha Narasimha</span>
<span class="highlight-box">📍 Visakhapatnam</span>
<span class="highlight-box">🏛 Ancient Temple</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Famous Chandanotsavam festival 🌼</li>
<li>Beautiful Kalinga-style architecture 🏛</li>
<li>Scenic hilltop location 🌄</li>
</ul>

</div>

<!-- 5 -->
<div class="card" id="srikalahasti">

<h2>Srikalahasti Temple</h2>

<div class="images">
<img src="../assets/images/at9.jpg">
<img src="../assets/images/at10.jpg">
</div>

<h3>About</h3>
<p>Srikalahasti Temple is a renowned Shiva temple located in Tirupati district. It is famous as the "Dakshina Kailasam" and is one of the important Shiva temples in South India.</p>

<h3>History</h3>
<p>The temple was developed during the Pallava, Chola, and Vijayanagara periods. It is well known for Rahu-Ketu Puja, performed by devotees seeking relief from planetary doshas.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Shiva</span>
<span class="highlight-box">📍 Srikalahasti</span>
<span class="highlight-box">🌙 Rahu-Ketu Puja</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Famous Rahu-Ketu Puja 🙏</li>
<li>Ancient Dravidian architecture 🏛</li>
<li>Located on the banks of the Swarnamukhi River 🌊</li>
</ul>

</div>

</body>
</html>