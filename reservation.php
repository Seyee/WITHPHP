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
    <link rel="stylesheet" href="reservation.css">
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
        </div>
    </nav>

    <div class="container">
        <form action="connect.php" method="POST">
            <h2><u>Reserve Now</u></h2>
    
            <input type="text" id="name" name="name" placeholder="Full Name" required>
    
            <div>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone number (09123456789)" maxlength="11" pattern="09[0-9]{9}" required>
            </div>
    
            <input type="text" id="address" name="address" placeholder="Address" required>
    
            <div class="room-type-container">
                <label for="room-type">Room Type</label>
                <select id="room-type" name="room_type" required>
                    <option hidden>Select a room</option>
                    <option value="simple-room">Simple Room</option>
                    <option value="comfort-room">Comfort Room</option>
                    <option value="elegant-room">Elegant Room</option>
                    <option value="luxury-room">Luxury Room</option>
                    <option value="royal-room">Royal Room</option>
                    <option value="kings-room">King's Room</option>
                </select>
            </div>
            
            <div class="date-time">
                <div>
                    <label for="checkin-date">Check-in Date</label>
                    <input type="date" id="checkin-date" name="checkin_date" min="2024-12-06" required>
                </div>
                <div>
                    <label for="checkout-date">Check-out Date</label>
                    <input type="date" id="checkout-date" name="checkout_date" min="2024-12-07" required>
                </div>
            </div>
    
            <div class="date-time">
                <div>
                    <label for="checkin-time">Check-in Time</label>
                    <input type="time" id="checkin-time" name="checkin_time" required>
                </div>
                <div>
                    <label for="checkout-time">Check-out Time</label>
                    <input type="time" id="checkout-time" name="checkout_time" required>
                </div>
            </div>
    
            <div>
                <button type="submit">Reserve Now</button>
            </div>
        </form>
    </div>
</body>
</html>
