<?php
session_start();
include 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Return Policy - Kumar Brothers</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <nav class="navbar">
        <a href="index.php" class="logo">Kumar Brothers</a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="men.php">Men</a>
            <a href="women.php">Women</a>
            <a href="kids.php">Kids</a>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
                <div class="profile-dropdown">
                    <div class="profile-icon">
                        <i class="fas fa-user-circle"></i>
                        <span>My Profile</span>
                    </div>
                    <div class="dropdown-content">
                        <a href="profile.php"><i class="fas fa-user"></i> My Profile</a>
                        <a href="edit_profile.php"><i class="fas fa-edit"></i> Edit Profile</a>
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </nav>

    <main class="main-content">
        <h1>Return Policy</h1>
        <h2>Easy Returns for Your Peace of Mind</h2>
        <h3>Return Period</h3>
        <ul>
            <li>7 days return policy from the date of delivery</li>
            <li>Product must be unused and in original condition</li>
            <li>Original tags and packaging must be intact</li>
        </ul>
        <h3>Return Process</h3>
        <ul>
            <li>Login to your account and visit the Orders section</li>
            <li>Select the item you want to return</li>
            <li>Choose the reason for return</li>
            <li>Schedule a pickup or drop-off</li>
            <li>Pack the item securely in its original packaging</li>
        </ul>
        <h3>Refund Process</h3>
        <ul>
            <li>Refunds will be processed within 5-7 business days after receiving the returned item</li>
            <li>Original payment method will be refunded</li>
            <li>Shipping charges are non-refundable</li>
        </ul>
        <h3>Non-Returnable Items</h3>
        <ul>
            <li>Innerwear and lingerie</li>
            <li>Customized products</li>
            <li>Sale items marked as "Final Sale"</li>
            <li>Items without original tags and packaging</li>
        </ul>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="about.php" class="hover:underline">About Us</a></li>
                    <li><a href="contact.php" class="hover:underline">Contact Us</a></li>
                    <li><a href="shipping.php" class="hover:underline">Shipping Policy</a></li>
                    <li><a href="return_policy.php" class="hover:underline">Return Policy</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Ganpat Bazar, Bhaderwah</p>
                <p>Phone: +91 9906355333</p>
                <p>Email: kumarbrothers123@gmail.com</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/arun.jandyal.39" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/aruj_mani_gupta/#" target="_blank" rel="noopener noreferrer" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/919906355333" target="_blank" rel="noopener noreferrer" class="hover:text-green-500"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="text-align:center; padding: 1rem 0;">
            <p>&copy; 2024 Kumar Brothers. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
