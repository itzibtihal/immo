<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: http://localhost:63342/MVC_Library/View/User/books.php");
    exit;
}

$errors = $_SESSION['errors'] ?? [];
session_unset();
$pageTitle = 'Login';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatein - Discover a place you'll love to live</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="Assets/css/style.css" rel="stylesheet">

</head>

<body class="custom-bg ">
    <?php include '../../View/templates/header.php'; ?>
    <!-- Hero section -->
    <div class="centred custom-bg rounded shadow-lg p-6 mt-12 md:flex md:items-center relative">
        <!-- Hero image with centered overlay text -->
        <div class="md:w-1/2 relative">
            <img src="Assets/img/hiDpiExtraLarge.webp" alt="Hero Image" class="w-full h-auto">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-white text-4xl font-bold">Discover a place<br> you'll love to live</h1>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 mt-6 md:mt-0 md:ml-6">
            <div class="form-inputs-container">
                <div class="mb-4 text-center">
                    <h2 class="text-2xl font-bold text-white mb-4">Login</h2>

                    <form action="../../app/Controller/LoginController.php" method="POST">
                        <?php if (isset($errors['login'])): ?>
                            <div class="mb-4 text-red-500">
                                <?php echo $errors['login']; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="customLabel">Email</label>
                            <input id="email"
                                class="p-2 border <?php echo isset($errors['email']) ? 'border-red-500' : 'border-gray-300'; ?> rounded w-full"
                                type="email" placeholder="Email" />
                            <?php if (isset($errors['email'])): ?>
                                <span
                                    class="text-<?php echo isset($errors['email']) ? 'red-500' : 'gray-300'; ?> text-xs italic">
                                    <?php echo $errors['email']; ?>
                                </span>
                            <?php endif; ?>
                        </div>


                        <!-- Password Field -->
                        <div class="mb-6">
                            <label class="customLabel" for="password">Password</label>
                            <input id="password"
                                class="p-2 border <?php echo isset($errors['password']) ? 'border-red-500' : 'border-gray-300'; ?> rounded w-full"
                                type="password" placeholder="Password" />
                            <?php if (isset($errors['password'])): ?>
                                <span
                                    class="text-<?php echo isset($errors['password']) ? 'red-500' : 'gray-300'; ?> text-xs italic">
                                    <?php echo $errors['password']; ?>
                                </span>
                            <?php endif; ?>
                        </div>


                        <!-- Submit Button -->
                        <div class="flex items-center justify-between">
                            <button
                                class="sign-up-button bg-purple-600 text-white px-6 py-2 rounded transition duration-300 hover:bg-purple-700 focus:outline-none focus:ring"
                                type="submit">
                                Sign In
                            </button>
                            <p class="text-white ml-4"><a class="text-purple-300 hover:underline"
                                    href="/path-to-forgot-password">
                                    Forgot Password?
                                </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <?php include '../../View/templates/footer.php'; ?>

        <script src="Assets/js/myscript.js"></script>
</body>

</html>