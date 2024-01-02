<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatein - Discover a place you'll love to live</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="../../Assets/css/authstyle.css" rel="stylesheet">

</head>

<body class="custom-bg text-gray-400">
<?php include '../../View/templates/header.php'; ?>
<!-- Hero section -->
<div class="centred custom-bg rounded shadow-lg p-6 mt-12 md:flex md:items-center relative">
    <!-- Hero image with centered overlay text -->
    <div class="md:w-1/2 relative">
        <img src="/Assets/img/hiDpiExtraLarge.webp" alt="Hero Image" class="w-full h-auto">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-white text-4xl font-bold">Discover a place<br> you'll love to live</h1>
            </div>
        </div>
    </div>

    <!-- Sign up form -->
    <div class="md:w-1/2 mt-6 md:mt-0 md:ml-6">
        <div class="form-inputs-container">
            <div class="mb-4 text-center">
                <h2 class="text-2xl font-bold text-white mb-4">Sign Up</h2>
                <div class="inline-flex segment-control">
                    <button class="first-button bg-white text-purple-600 px-6 py-2 rounded-l-lg transition duration-300 focus:outline-none focus:ring">Buyer</button>
                    <button class="second-button bg-transparent text-white px-6 py-2 rounded-r-lg border border-white transition duration-300 focus:outline-none focus:ring">Seller</button>
                </div>
                <label  for="full-name">Full Name</label>
                <input id="full-name" class="p-2 border border-gray-300 rounded" type="text" placeholder="Full Name" />

                <label for="email">Email</label>
                <input id="email" class="p-2 border border-gray-300 rounded" type="email" placeholder="Email" />

                <label  for="password">Password</label>
                <input id="password" class="p-2 border border-gray-300 rounded" type="password" placeholder="Password" />

                <label  for="phone-number">Phone Number</label>
                <input id="phone-number" class="p-2 border border-gray-300 rounded" type="tel" placeholder="Phone Number" />

                <label  for="city">City</label>
                <select id="city" class="p-2 border border-gray-300 rounded">
                    <option>Select a city</option>
                    <!-- City options -->
                </select>

                <label for="address">Address</label>
                <input id="address" class="p-2 border border-gray-300 rounded" type="text" placeholder="Address" />
                <div class="flex items-center justify-between">
                    <button class="sign-up-button bg-purple-600 text-white px-6 py-2 rounded transition duration-300 hover:bg-purple-700 focus:outline-none focus:ring">Sign Up</button>
                    <p class="text-white ml-4"><a href="#" class="text-purple-300 hover:underline">Already have an account?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../View/templates/footer.php'; ?>

<script src="../../Assets/js/myscript.js"></script>
</body>
</html>