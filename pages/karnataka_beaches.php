<?php $state = "karnataka"; ?>
<?php include("../includes/header_karnataka.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Karnataka Beaches</title>
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

<h2>Karnataka Beaches 🌊</h2>

<!-- Beach Navbar -->
<div class="beach-nav">
    <a href="../karnataka.php">Karnataka</a>
    <a href="#gokarna">Gokarna</a>
    <a href="#karwar">Karwar</a>
    <a href="#malpe">Malpe</a>
    <a href="#mudeswara">Mudeswara</a>
    <a href="#bhatkal">Bhatkal</a>
</div>

<!-- Gokarna -->
<div id="gokarna" class="section">
    <h3>Gokarna Beach</h3>
    <div class="images">
        <img src="../assets/images/b1.jpg">
        <img src="../assets/images/b2.jpg">
    </div>
    <p class="desc">
Gokarna Beach is a pristine and serene beach in Karnataka, famous for its natural beauty and peaceful environment. Popular for swimming, sunbathing, and beach trekking, it attracts tourists looking for a quiet getaway.
    </p>
</div>

<!-- Karwar -->
<div id="karwar" class="section">
    <h3>Karwar Beach</h3>
    <div class="images">
        <img src="../assets/images/b3.jpg">
        <img src="../assets/images/b4.jpg">
    </div>
    <p class="desc">
Karwar Beach is known for its long coastline, calm waters, and scenic sunsets. It is ideal for photography, leisurely walks, and enjoying the local seafood.
    </p>
</div>

<!-- Malpe -->
<div id="malpe" class="section">
    <h3>Malpe Beach</h3>
    <div class="images">
        <img src="../assets/images/b5.jpg">
        <img src="../assets/images/b6.jpg">
    </div>
    <p class="desc">
Malpe Beach is a popular beach in Karnataka with water sports, boat rides, and beautiful views. It is near the famous St. Mary’s Island and offers a vibrant atmosphere for tourists.
    </p>
</div>

<!-- Mudeswara -->
<div id="mudeswara" class="section">
    <h3>Mudeswara Beach</h3>
    <div class="images">
        <img src="../assets/images/b7.jpg">
        <img src="../assets/images/b8.jpg">
    </div>
    <p class="desc">
Mudeswara Beach is a calm and less crowded beach, perfect for relaxing and enjoying the scenic coastline. The beach is surrounded by lush greenery and provides a peaceful retreat.
    </p>
</div>

<!-- Bhatkal -->
<div id="bhatkal" class="section">
    <h3>Bhatkal Beach</h3>
    <div class="images">
        <img src="../assets/images/b9.jpg">
        <img src="../assets/images/b10.jpg">
    </div>
    <p class="desc">
Bhatkal Beach is known for its pristine waters and tranquil surroundings. It is a great spot for nature lovers and those seeking a quiet coastal experience.
    </p>
</div>

</body>
</html>