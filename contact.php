<?php
session_start();
include 'config/db.php';

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        $errorMessage = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Please enter a valid email address.';
    } else {
        // Send email or store message logic here
        // For demonstration, we will send an email to the store email

        $to = 'kumarbrothers123@gmail.com';
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

        if (mail($to, $subject, $body, $headers)) {
            $successMessage = 'Your message has been sent successfully.';
        } else {
            $errorMessage = 'There was an error sending your message. Please try again later.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - Kumar Brothers</title>
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

    <main class="container mx-auto mt-20 p-6 bg-white rounded-lg shadow-lg max-w-lg">
        <form class="space-y-6" method="POST" action="contact.php" novalidate>
            <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Contact Us</h1>
            <?php if ($successMessage): ?>
                <div class="p-4 mb-4 text-green-800 bg-green-200 rounded"><?php echo htmlspecialchars($successMessage); ?></div>
            <?php endif; ?>
            <?php if ($errorMessage): ?>
                <div class="p-4 mb-4 text-red-800 bg-red-200 rounded"><?php echo htmlspecialchars($errorMessage); ?></div>
            <?php endif; ?>
            <div>
                <label for="name" class="block mb-2 font-semibold text-gray-700">Your Name</label>
                <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <label for="email" class="block mb-2 font-semibold text-gray-700">Your Email</label>
                <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <label for="subject" class="block mb-2 font-semibold text-gray-700">Subject</label>
                <input type="text" id="subject" name="subject" required value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <label for="message" class="block mb-2 font-semibold text-gray-700">Message</label>
                <textarea id="message" name="message" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded hover:bg-blue-700 transition-colors">Send Message</button>
        </form>
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
