<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to login/signup page
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.ibb.co/nmDNrp6/Untitled-design-4.png">
    <title>King's Bed Hotel</title>
    <link rel="stylesheet" href="contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="dashboard.html"><img src="https://i.ibb.co/FmT02bH/King-s-Bed-Hotel-2500-x-1024-px-4.png"></a></div>
            <ul>
                <li><a href="dashboard.html">HOME</a></li>
                <li><a href="rooms.html">Rooms</a></li>
                <li><a href="reservation.html">Reservation</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            </ul>
        </div>
    </nav>

    <div class="contact-section">
        <div class="contact-info">
            <div><i class='bx bxs-location-plus'></i>Main Branch Makati</div>
            <div><i class='bx bxs-contact'></i>king's.hotel.concerns@support.com</div>
            <div><i class='bx bxs-phone'></i>For inquiry call (87900-900)</div>
            <div><i class='bx bxs-time-five'></i>Mon - Fri 8:00 AM to 5:00 PM</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="concern.php" method="POST" class="contact">
                <input type="text" name="name" class="text" placeholder="Your name" required>
                <input type="email" name="email" class="text-box" placeholder="Your email" required>
                <textarea name="message" rows="5" placeholder="Your concern." required></textarea>
                <a href="contact.html">
                <input type="submit" name="submit" class="send-btn" value="Send to support">
                </a>
            </form>
        </div> 
    </div>
</body>
</html>
