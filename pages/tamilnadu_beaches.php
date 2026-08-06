<?php $state = "tamilnadu"; ?>
<?php include("../includes/header_tamilnadu.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tamil Nadu Beaches</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f5f5f5;
        }

        h2 {
            text-align: center;
            color: #2e8b57;
        }

        /* Beach Navbar */
        .beach-nav {
            background: #006400;
            padding: 10px;
            text-align: center;
        }

        .beach-nav a {
            color: white;
            margin: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .beach-nav a:hover {
            color: yellow;
        }

        /* Section */
        .section {
            padding: 30px;
            margin: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .images {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .images img {
            width: 300px;
            height: 200px;
            border-radius: 10px;
        }

        p {
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Tamil Nadu Beaches 🌊</h2>

<!-- Beach Navbar -->
<div class="beach-nav">
    <a href="../tamilnadu.php">Tamil Nadu</a>
    <a href="#marina">Marina</a>
    <a href="#elliot">Elliot's</a>
    <a href="#mahabalipuram">Mahabalipuram</a>
    <a href="#kanyakumari">Kanyakumari</a>
    <a href="#dhanushkodi">Dhanushkodi</a>
</div>

<!-- Marina Beach -->
<div id="marina" class="section">
    <h3>Marina Beach</h3>
    <div class="images">
        <img src="../assets/images/bt1.jpg">
        <img src="../assets/images/bt2.jpg">
    </div>
    <p class="desc">
        Marina Beach in Chennai is one of the longest urban beaches in the world. It is famous for its golden sands, beautiful sunrise views, and lively atmosphere, making it a favorite destination for visitors.
    </p>
</div>

<!-- Elliot's Beach -->
<div id="elliot" class="section">
    <h3>Elliot's Beach</h3>
    <div class="images">
        <img src="../assets/images/bt3.jpg">
        <img src="../assets/images/bt4.jpg">
    </div>
    <p class="desc">
        Elliot's Beach, also known as Besant Nagar Beach, is a peaceful and clean beach in Chennai. It is popular for evening walks, relaxing by the sea, and enjoying the calm coastal environment.
    </p>
</div>

<!-- Mahabalipuram Beach -->
<div id="mahabalipuram" class="section">
    <h3>Mahabalipuram Beach</h3>
    <div class="images">
        <img src="../assets/images/bt5.jpg">
        <img src="../assets/images/bt6.jpg">
    </div>
    <p class="desc">
        Mahabalipuram Beach is known for its scenic beauty and its location near the famous Shore Temple. Visitors enjoy the peaceful shoreline, sea breeze, and the historic charm of the surrounding monuments.
    </p>
</div>

<!-- Kanyakumari Beach -->
<div id="kanyakumari" class="section">
    <h3>Kanyakumari Beach</h3>
    <div class="images">
        <img src="../assets/images/bt7.jpg">
        <img src="../assets/images/bt8.jpg">
    </div>
    <p class="desc">
        Kanyakumari Beach is located at the southernmost tip of India, where the Arabian Sea, Bay of Bengal, and Indian Ocean meet. It is famous for its spectacular sunrise and sunset views.
    </p>
</div>

<!-- Dhanushkodi Beach -->
<div id="dhanushkodi" class="section">
    <h3>Dhanushkodi Beach</h3>
    <div class="images">
        <img src="../assets/images/bt9.jpg">
        <img src="../assets/images/bt10.jpg">
    </div>
    <p class="desc">
        Dhanushkodi Beach, located near Rameswaram, is known for its crystal-clear waters, peaceful surroundings, and historical significance. It offers breathtaking coastal scenery and a unique travel experience.
    </p>
</div>

</body>
</html>