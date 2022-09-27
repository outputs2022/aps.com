<?php
session_start();

    include("pages/connection.php");
    include("pages/functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Monitoring System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" class="header-brand">APS</a>
        <nav>
            <ul>
                <li><a href="pages/about.html">About</a></li>
                <li><a href="pages/contact.html">Contact Us</a></li>
                <li><a href="pages/terms.html">Terms of Services</a></li>
            </ul>
            <p class="header-greet">Hello, <?php echo $user_data['fname']; ?>. Welcome!!!</p>
        <a href="logout.php" class="header-logout">Log out</a>
        </nav>
    </header>
    <main>
        <section class="index-banner">
            <div class="vertical-center">
                <h2>VEHICLE MONITORING<br>SYSTEM</h2><br>
                <h1>Helps you monitor your car and its surrounding in your selected parking area. You can check if there are anything suspicious happening around your car!</h1>
            </div>
        </section>
        <div class="wrapper">
            <section class="index-links">
                <a href="logout.php"><div class="index-boxlink-square">
                    <h3>Log Out</h3>
                </div></a>
                <a href="pages/cam.html"><div class="index-boxlink-rectangle">
                    <h3>Live Camera</h3>
                </div></a>
                <a href="index.php"><div class="index-boxlink-square">
                    <h3>APS</h3>
                </div></a>
                <a href="https.facebook.com"><div class="index-boxlink-rectangle">
                    <h3>Facebook Page</h3>
                </div></a>
                <a href="pages/about.html"><div class="index-boxlink-square">
                    <h3>About</h3>
                </div></a>
                <a href="pages/contact.html"><div class="index-boxlink-square">
                    <h3>Contact Us</h3>
                </div></a>
            </section>
        </div>
    </main>
    <div class="wrapper">
        <footer>
            <ul class="footer-links-main">
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <li><a href="pages/about.html">About</a></li>
                <li><a href="pages/contact.html">Contact Us</a></li>
                <li><a href="pages/terms.html">Terms of Services</a></li>
            </ul>
            <ul class="footer-links-relate">
                <li><p>Related Systems:</p></li><br>
                <li><a href="pages/signup.php">Registration System - Martin Orais Jr.</a></li>
                <li><a href="#">Booking System - Crissa Maligon</a></li>
                <li><a href="#">Driver's Monitoring System - Reynard Narciso</a></li>
            </ul>
        </footer>
    </div> 
</body>
</html>