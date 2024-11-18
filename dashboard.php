<nav class="navbar">
    <div class="navdiv">
        <div class="logo">
            <a href="dashboard.php"><img src="https://i.ibb.co/FmT02bH/King-s-Bed-Hotel-2500-x-1024-px-4.png"></a>
            <link rel="stylesheet" href="style.css">
        </div>
        <ul>
            <li><a href="dashboard.php">HOME</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="profile.php" class="profile-btn">Profile</a></li>
            <?php else: ?>
                <li><a href="login.php" class="login-btn">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>


    <!-- SLIDESHOW -->
    <div class="slider">
        <div class="slide">
            <img src="https://i.ibb.co/zrkNtqL/Screenshot-2024-09-27-215940-copy.png" alt="image 1">
        </div>
        <div class="slide">
            <img src="https://i.ibb.co/7pHtm6G/final.png" alt="image 2">
        </div>
        <div class="slide">
            <img src="https://i.ibb.co/b289TSb/hallway.png" alt="image 3">
        </div>
        <div class="slide">
            <img src="https://i.ibb.co/JkH4xHc/bedroom.png" alt="image 4">
        </div>
    </div>

        <!-- HOTEL REVIEWS SECTION -->
        <section class="reviews">
            <div class="reviews-header">
                <h2>Customer Reviews</h2>
            </div>
            <div class="reviews-grid">
                <div class="review-card">
                    <img src="https://media.istockphoto.com/id/1364917563/photo/businessman-smiling-with-arms-crossed-on-white-background.jpg?s=612x612&w=0&k=20&c=NtM9Wbs1DBiGaiowsxJY6wNCnLf0POa65rYEwnZymrM=" alt="User 1" class="reviewer-img">
                    <div class="review-content">
                        <h3>Mark Ezekiel</h3>
                        <p>"Absolutely loved my stay! The room was clean, the staff was friendly, and the location was perfect."</p>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
                <div class="review-card">
                    <img src="https://pbs.twimg.com/profile_images/1008650588697944064/2OghK9Sl_400x400.jpg" alt="User 2" class="reviewer-img">
                    <div class="review-content">
                        <h3>Sayieeh</h3>
                        <p>"The view from the room was amazing, and I felt so comfortable. I will definitely come back!"</p>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
                <div class="review-card">
                    <img src="https://t4.ftcdn.net/jpg/06/12/37/95/360_F_612379539_nATPRGof8MPSNts37Rvs17xJJrwe4s3N.jpg" alt="User 3" class="reviewer-img">
                    <div class="review-content">
                        <h3>Rhianne Venice</h3>
                        <p>"Fantastic service! The amenities were top-notch, and the breakfast was excellent."</p>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Special Offers Section -->
        <section class="special-offers">
            <div class="offers-container">
        <div class="offer">
            <h3>Weekend Getaway</h3>
            <p>Book a 2-night stay and get 30% off your weekend getaway!</p>
            <a href="reservation.html"><button class="offer-btn">Book Now</button></a>
        </div>
        <div class="offer">
            <h3>Early Bird Discount</h3>
            <p>Save 20% when you book your stay 30 days in advance!</p>
            <a href="reservation.html"><button class="offer-btn">Book Now</button></a>
        </div>
        <div class="offer">
            <h3>Family Vacation Deal</h3>
            <p>Stay for 4 nights and get the 5th night free! Perfect for family getaways.</p>
            <a href="reservation.html"><button class="offer-btn">Book Now</button></a>
        </div>
    </div>
        </section>

        <!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="https://i.ibb.co/FmT02bH/King-s-Bed-Hotel-2500-x-1024-px-4.png" alt="King's Bed Hotel Logo">
        </div>
        <div class="footer-links">
            <a href="rooms.html">Our Rooms</a>
            <a href="about.html">About us</a>
            <a href="contact.html">Contact Us</a>
        </div>
        <p>&copy; 2024 King's Bed Hotel. All rights reserved.</p>
    </div>
</footer>



</body>
</html>
