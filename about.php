<?php
session_start();
include 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us - Kumar Brothers</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body class="bg-gray-100">
    <nav class="navbar bg-gray-800 shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="index.php" class="text-xl font-bold text-white">Kumar Brothers</a>
            <div class="flex space-x-6">
                <a href="index.php" class="text-white hover:text-blue-500">Home</a>
                <a href="men.php" class="text-white hover:text-blue-500">Men</a>
                <a href="women.php" class="text-white hover:text-blue-500">Women</a>
                <a href="kids.php" class="text-white hover:text-blue-500">Kids</a>
                <a href="shipping_policy.php" class="text-white hover:text-blue-500">Shipping Policy</a>
                <a href="cart.php" class="text-white hover:text-blue-500 flex items-center"><i class="fas fa-shopping-cart mr-1"></i> Cart</a>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
                    <div class="relative group">
                        <button class="flex items-center space-x-1 text-white hover:text-blue-500 focus:outline-none">
                            <i class="fas fa-user-circle text-xl"></i>
                            <span>My Profile</span>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-50">
                            <a href="profile.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">My Profile</a>
                            <a href="edit_profile.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Edit Profile</a>
                            <a href="logout.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="text-white hover:text-blue-500">Login</a>
                    <a href="register.php" class="text-white hover:text-blue-500">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-20 p-6 bg-white rounded-lg shadow-lg max-w-4xl">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">About Us</h1>
        <p class="text-lg text-gray-700 mb-6 text-center">Welcome to Kumar Brothers - Your Fashion Destination</p>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b-4 border-blue-600 pb-2">Our Story</h2>
            <p class="text-gray-700 leading-relaxed">Established in Ganpat Bazar, Bhaderwah, Kumar Brothers has been serving fashion enthusiasts with premium quality clothing and accessories. Our journey began with a simple vision: to provide our customers with the latest fashion trends while maintaining the highest standards of quality and customer service.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b-4 border-blue-600 pb-2">Our Mission</h2>
            <ul class="list-none grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Offer the latest fashion trends at competitive prices</li>
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Provide exceptional customer service</li>
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Maintain high-quality standards in all our products</li>
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Create a seamless shopping experience for our customers</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b-4 border-blue-600 pb-2">Why Choose Us?</h2>
            <ul class="list-none grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Wide range of premium fashion products</li>
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Competitive pricing</li>
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Expert fashion advice</li>
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Excellent customer support</li>
                <li class="relative pl-8 before:absolute before:left-0 before:top-1 before:text-blue-600 before:content-['✔'] font-semibold">Fast and reliable shipping</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b-4 border-blue-600 pb-2">Delivery Information</h2>
            <p class="text-gray-700 leading-relaxed">We currently do not deliver outside Bhaderwah. Delivery within 3 km of Bhaderwah is free of charge. For deliveries beyond 3 km, a delivery charge of ₹20 applies.</p>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-8 mt-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6">
            <div>
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <ul>
                    <li><a href="about.php" class="hover:underline">About Us</a></li>
                    <li><a href="contact.php" class="hover:underline">Contact Us</a></li>
                    <li><a href="shipping_policy.php" class="hover:underline">Shipping Policy</a></li>
                    <li><a href="return_policy.php" class="hover:underline">Return Policy</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                <p>Ganpat Bazar, Bhaderwah</p>
                <p>Phone: +91 9906355333</p>
                <p>Email: kumarbrothers123@gmail.com</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/arun.jandyal.39" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://www.instagram.com/aruj_mani_gupta/#" target="_blank" rel="noopener noreferrer" class="hover:text-pink-500"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://wa.me/919906355333" target="_blank" rel="noopener noreferrer" class="hover:text-green-500"><i class="fab fa-whatsapp fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8 text-gray-400">
            &copy; 2024 Kumar Brothers. All rights reserved.
        </div>
    </footer>
</body>
</html>
