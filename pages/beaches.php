<?php $state = "kerala"; ?>
<?php include("../includes/header_kerala.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Kerala Beaches</title>

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

<h2>Kerala Beaches 🌊</h2>

<!-- Beach Navbar -->
<div class="beach-nav">
    <a href="#kovalam">Kovalam</a>
    <a href="#varkala">Varkala</a>
    <a href="#marari">Marari</a>
    <a href="#alleppey">Alleppey</a>
    <a href="#bekal">Bekal</a>
</div>

<!-- Kovalam -->
<div id="kovalam" class="section">
    <h3>Kovalam Beach</h3>

    <div class="images">
        <img src="../assets/images/beach1.jpg">
        <img src="../assets/images/beach2.jpg">
    </div>

    <p class="desc">
Kovalam Beach is one of the most famous tourist destinations in Kerala, known for its crescent-shaped coastline and scenic beauty. The beach is surrounded by palm trees and offers a calm and relaxing environment for visitors. It is especially popular for activities like swimming, sunbathing, and enjoying Ayurvedic treatments. The iconic lighthouse adds to its charm and provides a panoramic view of the Arabian Sea. Kovalam is also well-known for its breathtaking sunsets that attract tourists from all over the world.
</p>
</div>

<!-- Varkala -->
<div id="varkala" class="section">
    <h3>Varkala Beach</h3>
    <div class="images">
        <img src="../assets/images/beach3.jpg">
        <img src="../assets/images/beach4.jpg">
    </div>
    <p class="desc">
Varkala Beach is a unique and beautiful beach in Kerala, famous for its stunning cliffs overlooking the Arabian Sea. It is the only place in Kerala where cliffs are found adjacent to the sea, making it very special. The beach is known for its peaceful atmosphere and spiritual importance among visitors. Many tourists come here to relax, enjoy the view, and explore nearby cafes and shops. The combination of natural beauty and cultural vibe makes Varkala a must-visit destination.
</p>
</div>

<!-- Marari -->
<div id="marari" class="section">
    <h3>Marari Beach</h3>
    <div class="images">
        <img src="../assets/images/beach5.jpg">
        <img src="../assets/images/beach6.jpg">
    </div>
    <p class="desc">
Marari Beach is a quiet and less crowded destination that offers a peaceful escape from busy city life. Surrounded by coconut trees and traditional fishing villages, it reflects the natural beauty of Kerala. The beach is perfect for long walks, relaxation, and enjoying the calm sea breeze. Visitors can experience local culture and simple village life here. It is an ideal place for those looking for silence, nature, and a refreshing environment.
</p>
</div>

<!-- Alleppey -->
<div id="alleppey" class="section">
    <h3>Alleppey Beach</h3>
    <div class="images">
        <img src="../assets/images/beach7.jpg">
        <img src="../assets/images/beach8.jpg">
    </div>
    <p class="desc">
Alleppey Beach is a popular tourist attraction known for its historic pier and scenic beauty. The beach is closely connected with Kerala’s famous backwaters and houseboat experiences. It is a great place for evening walks, photography, and spending time with family and friends. The cool sea breeze and peaceful surroundings make it very relaxing. During sunset, the view becomes even more beautiful and attracts many visitors.
</p>
</div>

<!-- Bekal -->
<div id="bekal" class="section">
    <h3>Bekal Beach</h3>
    <div class="images">
        <img src="../assets/images/beach9.jpg">
        <img src="../assets/images/beach10.jpg">
    </div>
   <p class="desc">
Bekal Beach is well known for the historic Bekal Fort, which stands proudly near the shoreline. The beach offers a clean, spacious, and less crowded environment for visitors to relax. It is a perfect place to enjoy the natural beauty of the Arabian Sea and take photographs. Tourists can explore the fort and enjoy the panoramic views from the top. The peaceful surroundings make it an ideal destination for a calm and enjoyable visit.
</p>
</div>

</body>
</html>