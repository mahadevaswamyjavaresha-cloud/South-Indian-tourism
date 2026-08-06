<?php $state = "kerala"; ?>
<?php include("../includes/header_kerala.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Kerala Backwaters</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f5f5f5;
        }

        h2 {
            text-align: center;
            color: #2e8b57;
            margin-top: 20px;
        }

        /* Navbar inside page */
        .sub-nav {
            background: #006400;
            padding: 10px;
            text-align: center;
        }

        .sub-nav a {
            color: white;
            margin: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .sub-nav a:hover {
            color: yellow;
        }

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

<h2>Kerala Backwaters 🚤</h2>

<!-- Sub Navbar -->
<div class="sub-nav">
    <a href="#alleppey">Alleppey</a>
    <a href="#kumarakom">Kumarakom</a>
    <a href="#kollam">Kollam</a>
    <a href="#ashtamudi">Ashtamudi</a>
    <a href="#kuttanad">Kuttanad</a>
</div>

<!-- Alleppey -->
<div id="alleppey" class="section">
    <h3>Alleppey Backwaters</h3>
    <div class="images">
        <img src="../assets/images/backwater1.jpg">
        <img src="../assets/images/backwater2.jpg">
    </div>
    <p class="desc">
Alleppey, also known as Alappuzha, is famous for its beautiful backwaters and houseboat experiences. The calm canals, lagoons, and lakes create a peaceful and scenic environment. Tourists can enjoy relaxing houseboat cruises while experiencing traditional Kerala life. The lush greenery and coconut trees add to its natural charm. It is one of the most visited backwater destinations in Kerala.
</p>
</div>

<!-- Kumarakom -->
<div id="kumarakom" class="section">
    <h3>Kumarakom</h3>
    <div class="images">
        <img src="../assets/images/backwater3.jpg">
        <img src="../assets/images/backwater4.jpg">
    </div>
    <p>Known for bird sanctuary and peaceful backwaters.</p>
</div><p class="desc">
Kumarakom is a serene backwater destination located near Vembanad Lake, the largest lake in Kerala. It is well known for its bird sanctuary, which attracts many migratory birds. The peaceful environment and natural beauty make it perfect for relaxation. Visitors can enjoy boating, fishing, and village life experiences. Kumarakom is ideal for nature lovers and photography enthusiasts.
</p>

<!-- Kollam -->
<div id="kollam" class="section">
    <h3>Kollam Backwaters</h3>
    <div class="images">
        <img src="../assets/images/backwater5.jpg">
        <img src="../assets/images/backwater6.jpg">
    </div>
    <p class="desc">
Kollam is one of the oldest port cities in Kerala and is famous for its scenic backwaters. It serves as a gateway to the long and beautiful Ashtamudi Lake. Visitors can enjoy long houseboat cruises through calm and picturesque waterways. The region is rich in culture, history, and traditional industries. Kollam offers a unique blend of natural beauty and heritage.
</p>
</div>

<!-- Ashtamudi -->
<div id="ashtamudi" class="section">
    <h3>Ashtamudi Lake</h3>
    <div class="images">
        <img src="../assets/images/backwater7.jpg">
        <img src="../assets/images/backwater8.jpg">
    </div>
    <p class="desc">
Ashtamudi Lake is one of the largest and most beautiful lakes in Kerala, known for its unique palm-shaped structure. It plays a major role in the backwater tourism of the state. The lake is surrounded by lush greenery and small villages. Tourists can enjoy boating and explore the scenic beauty of the region. It is a perfect place for relaxation and nature exploration.
</p>
</div>

<!-- Kuttanad -->
<div id="kuttanad" class="section">
    <h3>Kuttanad</h3>
    <div class="images">
        <img src="../assets/images/backwater9.jpg">
        <img src="../assets/images/backwater10.jpg">
    </div>
    <p class="desc">
Kuttanad is known as the “Rice Bowl of Kerala” due to its vast paddy fields and agricultural activities. It is one of the few places in the world where farming is done below sea level. The region is famous for its beautiful backwaters and village life. Visitors can experience traditional farming and peaceful boat rides. Kuttanad offers a unique and refreshing rural experience.
</p>
</div>

</body>
</html>