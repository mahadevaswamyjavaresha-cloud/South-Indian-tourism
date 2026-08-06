<?php $state = "tamilnadu"; ?>
<?php include("../includes/header_tamilnadu.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Tamil Nadu Temples</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:Poppins;
    background:#f4f6f8;
}

.title{
    text-align:center;
    padding:15px;
    font-size:24px;
    color:#2e8b57;
    font-weight:bold;
}

.subnav{
    background:#1f7a4d;
    padding:10px;
    text-align:center;
    position:sticky;
    top:0;
    z-index:1000;
}

.subnav a{
    color:white;
    margin:0 15px;
    text-decoration:none;
    font-weight:500;
}

.subnav a:hover{
    text-decoration:underline;
}

.card{
    background:white;
    margin:20px auto;
    width:85%;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.images{
    display:flex;
    gap:20px;
    margin:15px 0;
}

.images img{
    width:48%;
    height:200px;
    object-fit:cover;
    border-radius:10px;
}

.highlights{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    margin:10px 0;
}

.highlight-box{
    background:#e8f5e9;
    padding:8px 12px;
    border-radius:20px;
    font-size:13px;
    color:#2e8b57;
}

h2{
    color:#2e8b57;
}

h3{
    margin-top:10px;
}
</style>

</head>

<body>

<div class="title">Tamil Nadu Temples 🛕</div>

<div class="subnav">
    <a href="#meenakshi">Meenakshi</a>
    <a href="#brihadeeswarar">Brihadeeswarar</a>
    <a href="#ramanathaswamy">Ramanathaswamy</a>
    <a href="#palani">Palani</a>
    <a href="#srirangam">Srirangam</a>
    <a href="#kapaleeshwarar">Kapaleeshwarar</a>
    <a href="#chidambaram">Chidambaram</a>
    <a href="#ekambareswarar">Ekambareswarar</a>
</div>

<!-- 1 -->
<div class="card" id="meenakshi">

<h2>Meenakshi Amman Temple</h2>

<div class="images">
<img src="../assets/images/tb1.jpg">
<img src="../assets/images/tb2.jpg">
</div>

<h3>About</h3>
<p>Meenakshi Amman Temple is one of the most famous Hindu temples in India, located in Madurai. It is dedicated to Goddess Meenakshi and Lord Sundareswarar.</p>

<h3>History</h3>
<p>The temple was rebuilt during the Nayak dynasty in the 16th century and is renowned for its magnificent Dravidian architecture.</p>

<div class="highlights">
<span class="highlight-box">🛕 Goddess Meenakshi</span>
<span class="highlight-box">📍 Madurai</span>
<span class="highlight-box">🎨 Colorful Gopurams</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Twelve magnificent temple towers</li>
<li>Hall of Thousand Pillars</li>
</ul>

</div>

<!-- 2 -->
<div class="card" id="brihadeeswarar">

<h2>Brihadeeswarar Temple</h2>

<div class="images">
<img src="../assets/images/tb3.jpg">
<img src="../assets/images/tb4.jpg">
</div>

<h3>About</h3>
<p>Brihadeeswarar Temple in Thanjavur is one of India's greatest architectural masterpieces dedicated to Lord Shiva.</p>

<h3>History</h3>
<p>Built by Raja Raja Chola I in the 11th century, it is a UNESCO World Heritage Site.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Shiva</span>
<span class="highlight-box">📍 Thanjavur</span>
<span class="highlight-box">🏛 UNESCO Site</span>
</div>

<h3>Special Features</h3>
<ul>
<li>216-feet tall temple tower</li>
<li>Massive granite Nandi statue</li>
</ul>

</div>

<!-- 3 -->
<div class="card" id="ramanathaswamy">

<h2>Ramanathaswamy Temple</h2>

<div class="images">
<img src="../assets/images/tb5.jpg">
<img src="../assets/images/tb6.jpg">
</div>

<h3>About</h3>
<p>Located in Rameswaram, this sacred temple is one of the twelve Jyotirlingas dedicated to Lord Shiva.</p>

<h3>History</h3>
<p>According to mythology, Lord Rama worshipped Shiva here after defeating Ravana.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Shiva</span>
<span class="highlight-box">📍 Rameswaram</span>
<span class="highlight-box">🙏 Jyotirlinga</span>
</div>

<h3>Special Features</h3>
<ul>
<li>World's longest temple corridor</li>
<li>22 sacred holy wells</li>
</ul>

</div>

<!-- 4 -->
<div class="card" id="palani">

<h2>Palani Murugan Temple</h2>

<div class="images">
<img src="../assets/images/tb7.jpg">
<img src="../assets/images/tb8.jpg">
</div>

<h3>About</h3>
<p>Palani Murugan Temple is one of the six sacred abodes of Lord Murugan, located atop a scenic hill.</p>

<h3>History</h3>
<p>The temple has been a major pilgrimage destination for centuries and attracts millions of devotees every year.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Murugan</span>
<span class="highlight-box">📍 Palani</span>
<span class="highlight-box">⛰ Hill Temple</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Winch and rope car facilities</li>
<li>Famous Panchamirtham Prasadam</li>
</ul>

</div>
<!-- 5 -->
<div class="card" id="srirangam">

<h2>Sri Ranganathaswamy Temple</h2>

<div class="images">
<img src="../assets/images/tb9.jpg">
<img src="../assets/images/tb10.jpg">
</div>

<h3>About</h3>
<p>Sri Ranganathaswamy Temple in Srirangam is one of the largest functioning Hindu temples in the world. It is dedicated to Lord Ranganatha, a reclining form of Lord Vishnu.</p>

<h3>History</h3>
<p>The temple has a history spanning over a thousand years and was expanded by the Chola, Pandya, Hoysala, and Vijayanagara dynasties.</p>

<div class="highlights">
<span class="highlight-box">🙏 Lord Vishnu</span>
<span class="highlight-box">📍 Srirangam</span>
<span class="highlight-box">🏛 Largest Temple Complex</span>
</div>

<h3>Special Features</h3>
<ul>
<li>21 magnificent temple towers</li>
<li>Grand Vaikuntha Ekadashi festival</li>
</ul>

</div>

<!-- 6 -->
<div class="card" id="kapaleeshwarar">

<h2>Kapaleeshwarar Temple</h2>

<div class="images">
<img src="../assets/images/tb11.jpg">
<img src="../assets/images/tb12.jpg">
</div>

<h3>About</h3>
<p>Kapaleeshwarar Temple is a famous Shiva temple located in Mylapore, Chennai. It is one of the city's most important religious landmarks.</p>

<h3>History</h3>
<p>The present temple was built by the Vijayanagara rulers during the 16th century in the traditional Dravidian architectural style.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Shiva</span>
<span class="highlight-box">📍 Chennai</span>
<span class="highlight-box">🎉 Arubathimoovar Festival</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Beautiful colorful gopuram</li>
<li>Sacred temple tank</li>
</ul>

</div>

<!-- 7 -->
<div class="card" id="chidambaram">

<h2>Nataraja Temple</h2>

<div class="images">
<img src="../assets/images/tb13.jpg">
<img src="../assets/images/tb14.jpg">
</div>

<h3>About</h3>
<p>The Nataraja Temple at Chidambaram is dedicated to Lord Shiva in his cosmic dancing form, Nataraja. It is one of the Pancha Bhoota Sthalams representing the element of space.</p>

<h3>History</h3>
<p>The temple flourished under the Chola dynasty and is renowned for its spiritual importance and artistic beauty.</p>

<div class="highlights">
<span class="highlight-box">💃 Lord Nataraja</span>
<span class="highlight-box">📍 Chidambaram</span>
<span class="highlight-box">🌌 Element of Space</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Famous Chidambara Rahasyam</li>
<li>Golden-roofed sanctum</li>
</ul>

</div>

<!-- 8 -->
<div class="card" id="ekambareswarar">

<h2>Ekambareswarar Temple</h2>

<div class="images">
<img src="../assets/images/tb15.jpg">
<img src="../assets/images/tb16.jpg">
</div>

<h3>About</h3>
<p>Ekambareswarar Temple in Kanchipuram is one of the largest temples dedicated to Lord Shiva. It is one of the Pancha Bhoota Sthalams representing the element of earth.</p>

<h3>History</h3>
<p>The temple was expanded by the Pallava, Chola, and Vijayanagara rulers and is an important pilgrimage destination in Tamil Nadu.</p>

<div class="highlights">
<span class="highlight-box">🛕 Lord Shiva</span>
<span class="highlight-box">📍 Kanchipuram</span>
<span class="highlight-box">🌍 Earth Element</span>
</div>

<h3>Special Features</h3>
<ul>
<li>Ancient 3,500-year-old mango tree</li>
<li>192-feet Rajagopuram</li>
</ul>

</div>

</body>
</html>