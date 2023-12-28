<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatein - Discover a place you'll love to live</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="../../Assets/css/style.css" rel="stylesheet">

</head>

<body class="custom-bg text-gray-400">

<!-- Header -->
<header class="custom-bg2 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 nav-container">
        <a href="#" class="logo text-2xl font-extrabold text-purple-600">Estatein</a>
        <!-- Desktop navigation menu -->
        <nav class="nav-menu hidden md:flex space-x-10">
            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">About</a>
            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Services</a>
            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Contact Us</a>
        </nav>
        <div class="nav-right hidden md:flex">
            <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Log in</a>
            <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-purple-600 text-base font-medium text-white px-4 py-2 border border-transparent rounded-md shadow-sm hover:bg-purple-700">Sign up</a>
        </div>
        <!-- Hamburger icon for mobile view -->
        <div class="hamburger md:hidden" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</header>

<!-- Mobile navigation menu -->
<nav id="mobileMenu" class="hidden md:hidden">
    <a href="#" class="block py-2 px-4 text-sm text-gray-500 hover:bg-gray-700 hover:text-white">Home</a>
    <a href="#" class="block py-2 px-4 text-sm text-gray-500 hover:bg-gray-700 hover:text-white">About</a>
    <a href="#" class="block py-2 px-4 text-sm text-gray-500 hover:bg-gray-700 hover:text-white">Services</a>
    <a href="#" class="block py-2 px-4 text-sm text-gray-500 hover:bg-gray-700 hover:text-white">Contact Us</a>
    <a href="#" class="block py-2 px-4 text-sm text-gray-500 hover:bg-gray-700 hover:text-white">Log in</a>
    <a href="#" class="block py-2 px-4 text-sm text-white bg-purple-600 hover:bg-purple-700">Sign up</a>
</nav>

<!-- Hero section -->
<div class="custom-bg rounded shadow-lg p-6 mt-12 md:flex md:items-center relative">
    <!-- Hero image with centered overlay text -->
    <div class="md:w-1/2 relative">
        <img src="../../Assets/img/hiDpiExtraLarge.webp" alt="Hero Image" class="w-full h-auto">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-white text-4xl font-bold">Discover a place<br> you'll love to live</h1>
            </div>
        </div>
    </div>

    <!-- Sign up form -->
    <div class="md:w-1/2 mt-6 md:mt-0 md:ml-6">
        <div class="form-inputs-container">
            <div class="mb-4">
                <div class="mb-2">Sign Up</div>
                <div class="flex mb-2">
                    <button class="bg-purple-600 text-white px-4 py-2 rounded-l">Buyer</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-r">Seller</button>
                </div>
                <label for="full-name">Full Name</label>
                <input id="full-name" class="p-2 border border-gray-300 rounded" type="text" placeholder="Full Name" />

                <label for="email">Email</label>
                <input id="email" class="p-2 border border-gray-300 rounded" type="email" placeholder="Email" />

                <label for="password">Password</label>
                <input id="password" class="p-2 border border-gray-300 rounded" type="password" placeholder="Password" />

                <label for="phone-number">Phone Number</label>
                <input id="phone-number" class="p-2 border border-gray-300 rounded" type="tel" placeholder="Phone Number" />

                <label for="city">City</label>
                <select id="city" class="p-2 border border-gray-300 rounded">
                    <option>Select a city</option>
                    <!-- City options -->
                </select>

                <label for="address">Address</label>
                <input id="address" class="p-2 border border-gray-300 rounded" type="text" placeholder="Address" />

                <button class="bg-purple-600 text-white p-2 rounded">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<footer class="custom-bg text-gray-400">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-between">
            <!-- Logo and Newsletter -->
            <div class="w-full lg:w-auto mb-6 lg:mb-0">
                <div class="flex items-center text-white mb-6">
                    <span class="text-purple-600 text-xl font-bold">Estatein</span>
                </div>
                <div class="bg-black rounded-full overflow-hidden flex items-center">
                  <span class="text-gray-500 ml-3">
                    <i class="fas fa-envelope"></i>
                  </span>
                    <label>
                        <input type="text" placeholder="Enter Your Email" class="px-4 py-2 w-full bg-black text-white placeholder-gray-500 focus:outline-none">
                    </label>
                    <button class="p-2 hover:bg-purple-700 transition-colors duration-300">
                        <i class="fas fa-paper-plane text-white"></i>
                    </button>

                </div>

            </div>

            <!-- Footer Navigation -->
            <div class="flex flex-wrap justify-between space-x-0 lg:space-x-12 w-full lg:w-auto">
                <div class="w-1/2 lg:w-auto mb-6 lg:mb-0">
                    <h2 class="text-white uppercase text-sm mb-3">Home</h2>
                    <ul class="list-none footer-links">
                        <li><a href="#" class="hover:text-gray-300">Hero Section</a></li>
                        <li><a href="#" class="hover:text-gray-300">Features</a></li>
                        <li><a href="#" class="hover:text-gray-300">Testimonials</a></li>
                        <li><a href="#" class="hover:text-gray-300">FAQ's</a></li>
                    </ul>
                </div>
                <div class="w-1/2 lg:w-auto mb-6 lg:mb-0">
                    <h2 class="text-white uppercase text-sm mb-3">About Us</h2>
                    <ul class="list-none footer-links">
                        <li><a href="#" class="hover:text-gray-300">Our Story</a></li>
                        <li><a href="#" class="hover:text-gray-300">Our Works</a></li>
                        <li><a href="#" class="hover:text-gray-300">Our Team</a></li>
                        <li><a href="#" class="hover:text-gray-300">Our Clients</a></li>
                    </ul>
                </div>
                <div class="w-1/2 lg:w-auto mb-6 lg:mb-0">
                    <h2 class="text-white uppercase text-sm mb-3">Properties</h2>
                    <ul class="list-none footer-links">
                        <li><a href="#" class="hover:text-gray-300">Portfolio</a></li>
                        <li><a href="#" class="hover:text-gray-300">Categories</a></li>
                    </ul>
                </div>
                <div class="w-1/2 lg:w-auto mb-6 lg:mb-0">
                    <h2 class="text-white uppercase text-sm mb-3">Services</h2>
                    <ul class="list-none footer-links">
                        <li><a href="#" class="hover:text-gray-300">Valuation Mastery</a></li>
                        <li><a href="#" class="hover:text-gray-300">Strategic Marketing</a></li>
                        <li><a href="#" class="hover:text-gray-300">Negotiation Wizardry</a></li>
                        <li><a href="#" class="hover:text-gray-300">Closing Success</a></li>
                        <li><a href="#" class="hover:text-gray-300">Property Management</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="w-1/2 lg:w-auto mb-6 lg:mb-0">
                    <h2 class="text-white uppercase text-sm mb-3 leading-relaxed">Contact Us</h2>
                    <ul class="list-none footer-links leading-relaxed">
                        <li><a href="#" class="hover:text-gray-300">Contact Form</a></li>
                        <li><a href="#" class="hover:text-gray-300">Our Offices</a></li>
            </div>


        </div>
    </div>

    <div class="border-t border-gray-700">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© 2023 Estatein —
                <a href="#" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">All Rights Reserved</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <!-- Social Icons -->
            <div class="w-full lg:w-auto flex justify-center lg:justify-start mt-6 lg:mt-0 lg:pl-12">
                <a href="#" class="text-gray-400 hover:text-white mr-5">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white mr-5">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white mr-5">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white mr-5">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
                </span>
        </div>
    </div>
</footer>
<script src="../../Assets/js/myscript.js"></script>
</body>
</html>