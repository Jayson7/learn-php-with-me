<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col justify-center items-center">
        <h1 class="flex uppercase items-center mb-6 text-2xl text-gray-900 dark:text-white font-extrabold">
            Welcome Back
            <img class="w-12 h-12 ml-2" src="./images/login.png" alt="logo">
        </h1>

        <div
            class="w-full bg-white rounded-lg shadow-md dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold text-gray-900 md:text-2xl dark:text-white">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="" method="post">
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            username</label>
                        <input type="text" name="username" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="yourname" required>
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600">
                            </div>
                            <label for="remember" class="ml-3 text-sm text-gray-500 dark:text-gray-300">Remember
                                me</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot
                            password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Sign in
                    </button>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="#"
                            class="text-blue-600 hover:underline dark:text-blue-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>

        <!-- 🟢 Improved Output Display -->
        <div
            class="mt-6 w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow-md text-center dark:bg-gray-800 dark:border-gray-700">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Submitted Data</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["username"]) && !empty($_POST["password"])) {
                    echo "<p class='text-gray-700 dark:text-gray-300'><strong>Username:</strong> " . htmlspecialchars($_POST["username"]) . "</p>";
                    echo "<p class='text-gray-700 dark:text-gray-300'><strong>Password:</strong> " . htmlspecialchars($_POST["password"]) . "</p>";
                } else {
                    echo "<p class='text-red-500 font-medium'>Please enter both username and password.</p>";
                }
            }
            ?>
        </div>

    </section>
</body>

</html>