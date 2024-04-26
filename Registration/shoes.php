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
            <img src="shoes1.jpg" alt="Shoe 1">
            <p>Basketball Heritage: The Reebok Kamikaze, originally released in.</p>
            <p id="moreText"> the 1990s, is a basketball sneaker worn by NBA legend Shawn Kemp, known for its high-top design and bold color blocking.

Distinctive Design: The Kamikaze features a unique zigzag design on the upper, along with Reebok's signature Hexalite cushioning technology for enhanced comfort and performance.

Iconic Colorways: The Kamikaze is available in several iconic colorways, including the "Black/White," "Black/Red," and "OG Sonics," which have become highly sought after by sneaker collectors.

Reintroduction: Reebok has reintroduced the Kamikaze in various retro and updated iterations
            </p>
            <button onclick="toggleMore()" id="showMoreBtn">View More</button>
        </div>
        <div class="product-card">
            <img src="shoes2.jpg" alt="Shoe 1">
            <p>The Air Jordan 1 Retro Low OG Trophy Room Away elegantly bridges the gap between sports heritage and contemporary sneaker culture. Set in a classic palette of sail.</p>
            <p id="moreText"> 
            </p>
            <button onclick="toggleMore()" id="showMoreBtn">View More</button>
        </div>
        <div class="product-card">
            <img src="shoes3.jpg" alt="Shoe 1">
            <p>Jordan Brand’s Summer 2024 lineup introduces the vibrant Air Jordan 1 High OG “Chrome.” This exclusive release, tailored for women, boasts meticulous design and attention to detail. The “Chrome” edition promises to enthrall collectors and enthusiasts alike.

With a dazzling Metallic Silver, Photon Dust, Sail, and Wolf Grey palette, the Air Jordan 1 stands out. Its shimmering Metallic Silver upper commands attention, complemented by the classic Wings logo on the ankle collar. A Sail midsole and translucent rubber outsole enhance its appeal.
.</p>
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
