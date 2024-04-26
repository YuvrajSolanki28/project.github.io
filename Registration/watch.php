<?php
    session_start();
    include('navbar.html');
    include('conn.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file -->
</head>
<body>

<main>
    <section class="product-container">
        <div class="product-card">
            <img src="watch1.jpg">
            <p>With various dial sizes, each watch from the Navimeter collection is bold and historically suited for aircraft navigators, by providing easy visibility even in poor lighting..</p>
            <p id="moreText"> The most distinctive feature of timepieces from this line is the aviation slide rule, perfect for complex calculations such as conversions from kilometres to nautical miles.
                Many timepieces are equipped with a transparent case back that allows an insight into the immaculate working of Breitling's certified automatic movement. 
                Though the dials are mainly traditional panda or reverse panda coloured, 
                other hues are available for some of the more adventurous wearers. 
                Apart from the slide ruler, the collection also features chronographs for the intricate aviators with chronograph sub-dials fitted horizontally.
            </p>
            <button onclick="toggleMore()" id="showMoreBtn">View More</button>
        </div>
        <div class="product-card">
            <img src="watch2.jpg">
            <p>As part of Seiko's esteemed Prospex collection, the Seiko Prospex Samurai Manta Ray 'Save the Ocean' SRPE33K1 watch not only showcases advanced watchmaking technology but also contributes to marine conservation efforts.</p>
            <p id="moreText"> 
            </p>
            <button onclick="toggleMore()" id="showMoreBtn">View More</button>
        </div>
        <div class="product-card">
            <img src="watch3.jpg">
            <p>This earthy green timepiece with a navy blue VELCRO strap is perfect for eco-astronauts. The seconds hand and counter hands on the chronograph are brown.</p>
            <p id="moreText"> 
            </p>
            <button onclick="toggleMore()" id="showMoreBtn">View More</button>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2023 Shoe Company</p>    
</footer>

<script>
    function toggleMore() {
        var moreText = document.getElementById("moreText");
        var buttonText = document.getElementById("showMoreBtn");

        if (moreText.style.display === "none") {
            moreText.style.display = "block";
            buttonText.innerHTML = "View Less";
        } else {
            moreText.style.display = "none";
            buttonText.innerHTML = "View More";
        }
    }
    

    // Hide the content by default
    document.addEventListener("DOMContentLoaded", function() {
        var moreText = document.getElementById("moreText");
        moreText.style.display = "none";
    });
</script>

<?php include('end.php'); ?>
