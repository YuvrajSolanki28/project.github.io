<?php
    
    include('navbar.html');
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<link rel ="stylesheet" href="style.css">
<main>
        <section class="product-container">
            <div class="product-card">
                <img src="shoes1.jpg" alt="Shoe 1">
                <p>Basketball Heritage: The Reebok Kamikaze, originally released in.</p>
        <p id="moreText">the 1990s, is a basketball sneaker worn by NBA legend Shawn Kemp, known for its high-top design and bold color blocking.

Distinctive Design: The Kamikaze features a unique zigzag design on the upper, along with Reebok's signature Hexalite cushioning technology for enhanced comfort and performance.

Iconic Colorways: The Kamikaze is available in several iconic colorways, including the "Black/White," "Black/Red," and "OG Sonics," which have become highly sought after by sneaker collectors.

Reintroduction: Reebok has reintroduced the Kamikaze in various retro and updated iterations, capitalizing on its nostalgic appeal and retro basketball trend.

Cultural Impact: The Kamikaze's association with Shawn Kemp and its bold design have made it a favorite among sneaker enthusiasts and collectors, contributing to its cultural impact.

Limited Editions: Reebok has released limited edition Kamikaze collaborations with artists and designers, adding unique twists and features to the classic silhouette.

Comfort and Performance: Despite its retro design, the Kamikaze incorporates modern cushioning and technology, providing comfort and performance suitable for both on and off the court.

Resurgence in Popularity: The Kamikaze has experienced a resurgence in popularity in recent years, with new releases and collaborations reigniting interest in the classic basketball sneaker.

Collectible Appeal: Certain Kamikaze releases, particularly rare and limited editions, have become highly collectible among sneaker enthusiasts, with prices rising on the resale market.

Nostalgic Value: For many sneakerheads, the Kamikaze represents a nostalgic trip down memory lane, evoking memories of '90s basketball and streetwear culture, making it a cherished addition to their collections.</p>
        <button onclick="showMore()" id="showMoreBtn">View Less</button>
            </div>
            <div class="product-card">
            <img src="watch2.jpg">
            <p>As part of Seiko's esteemed Prospex collection, the Seiko Prospex Samurai Manta Ray 'Save the Ocean' SRPE33K1 watch not only showcases advanced watchmaking technology but also contributes to marine conservation efforts.</p>
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
        <div class="product-card">
            <img src="watch3.jpg">
            <p>This earthy green timepiece with a navy blue VELCRO strap is perfect for eco-astronauts. The seconds hand and counter hands on the chronograph are brown</p>
            <p id="moreText"> 
            </p>
            <button onclick="toggleMore()" id="showMoreBtn">View More</button>
        </div>
    

                <script>
                    // Assume that the isLoggedIn variable is set to true if the user is logged in, and false otherwise
                    
                   
                   
                        var isLoggedIn = true;
                        if (isLoggedIn)
                        {
                            var moreText = document.getElementById("moreText");
                            var buttonText = document.getElementById("showMoreBtn");

                            buttonText.addEventListener("click", function()
                            {
                                if (moreText.style.display === 'none') 
                                {
                                    moreText.style.display = "block";
                                    buttonText.innerHTML = "View Less";
                                }
                                else
                                {
                                    moreText.style.display = "none";
                                    buttonText.innerHTML = "View More";
                                }
                            });

                            // Hide the content by default
                            moreText.style.display = "none";
                            buttonText.innerHTML = "View More";
                        }
                    
                    else
                    {
                       
                        header("Location: login.php");
                    }
                    
                </script>
    
                
                
           
            <!-- Repeat for other products -->
        </section>
</main>


<footer>
    <p>&copy; 2023 Shoe Company</p>    
</footer>

<?php include('end.php'); ?>