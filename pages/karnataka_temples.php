<?php $state = "karnataka"; ?>
<?php include("../includes/header_karnataka.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Karnataka Temples</title>

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



<div class="title">Karnataka Temples 🛕</div>

<div class="subnav">
    <a href="#murudeshwar">Murudeshwar</a>
    <a href="#udupi">Udupi Krishna</a>
    <a href="#sringeri">Sringeri</a>
    <a href="#kukke">Kukke Subramanya</a>
    <a href="#dharmasthala">Dharmasthala</a>
</div>

<!-- 1 -->
<div class="card" id="murudeshwar">
<h2>Murudeshwar Temple</h2>

<div class="images">
<img src="../assets/images/kt1.jpg">
<img src="../assets/images/kt2.jpg">
</div>

<h3>About</h3>
<p>Murudeshwar Temple is a famous Shiva temple located on the Arabian Sea coast in Uttara Kannada district.</p>

<h3>History</h3>
<p>According to mythology, it is associated with the legend of Ravana and the Atma Linga of Lord Shiva.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Shiva</span>
<span class="highlight-box">📍 Uttara Kannada</span>
<span class="highlight-box">🌊 Sea View</span>
</div>

<h3>Special Features</h3>
<ul>
<li>123-feet Shiva statue 🗿</li>
<li>Beautiful sea-facing temple 🌅</li>
</ul>

</div>

<!-- 2 -->
<div class="card" id="udupi">

<h2>Udupi Sri Krishna Temple</h2>

<div class="images">
<img src="../assets/images/kt3.jpg">
<img src="../assets/images/kt4.jpg">
</div>

<h3>About</h3>
<p>One of India's most famous Krishna temples located in Udupi.</p>

<h3>History</h3>
<p>Established by Sri Madhvacharya in the 13th century and known for its unique worship traditions.</p>

<div class="highlights">
<span class="highlight-box">🙏 Lord Krishna</span>
<span class="highlight-box">📍 Udupi</span>
<span class="highlight-box">🥣 Anna Prasada</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Kanakana Kindi window 🪟</li>
<li>Eight Mathas manage worship 🛕</li>
</ul>

</div>

<!-- 3 -->
<div class="card" id="sringeri">

<h2>Sringeri Sharada Peetham</h2>

<div class="images">
<img src="../assets/images/kt5.jpg">
<img src="../assets/images/kt6.jpg">
</div>

<h3>About</h3>
<p>Famous temple dedicated to Goddess Sharadamba situated on the banks of River Tunga.</p>

<h3>History</h3>
<p>Founded by Adi Shankaracharya as the first of the four Advaita Peethas.</p>

<div class="highlights">
<span class="highlight-box">📚 Sharada Devi</span>
<span class="highlight-box">📍 Chikkamagaluru</span>
<span class="highlight-box">🧘 Spiritual Center</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Ancient monastery 🏛️</li>
<li>Peaceful riverside location 🌿</li>
</ul>

</div>

<!-- 4 -->
<div class="card" id="kukke">

<h2>Kukke Subramanya Temple</h2>

<div class="images">
<img src="../assets/images/kt7.jpg">
<img src="../assets/images/kt8.jpg">
</div>

<h3>About</h3>
<p>Renowned temple dedicated to Lord Subramanya located amidst the Western Ghats.</p>

<h3>History</h3>
<p>The temple is famous for Sarpa Dosha and Ashlesha Bali rituals.</p>

<div class="highlights">
<span class="highlight-box">🐍 Lord Subramanya</span>
<span class="highlight-box">📍 Dakshina Kannada</span>
<span class="highlight-box">🌳 Western Ghats</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Sarpa Samskara rituals 🙏</li>
<li>Scenic mountain surroundings ⛰️</li>
</ul>

</div>

<!-- 5 -->
<div class="card" id="dharmasthala">

<h2>Dharmasthala Manjunatha Temple</h2>

<div class="images">
<img src="../assets/images/kt9.jpg">
<img src="../assets/images/kt10.jpg">
</div>

<h3>About</h3>
<p>A famous pilgrimage center dedicated to Lord Manjunatha (Shiva) in Dakshina Kannada.</p>

<h3>History</h3>
<p>Known for its unique tradition of religious harmony and charity for centuries.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Manjunatha</span>
<span class="highlight-box">📍 Dharmasthala</span>
<span class="highlight-box">❤️ Charity</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Free meals for thousands daily 🍛</li>
<li>Largest Bahubali statue nearby 🗿</li>
</ul>

</div>

</body>
</html>