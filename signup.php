<?php
session_start();

if (isset($_SESSION['loginID'])) {
    header("Location: courses.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <title>Login | Study.ai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="global.css">
</head>

<body>
    <main class="flex flex-col justify-center items-center min-h-screen px-2">
        <h1 class="text-6xl text-white font-bold">Study.id</h1>
        <p class="text-white font-SEMIbold">Mulai Belajar Bersama Kami</p>
        <section class="shine-white mt-16 bg-[#1B1B1B] p-12 sm:p-16 md:w-[50%] lg:w-[40%] xl:w-[30%] mx-auto rounded-lg">
            <h1 class="text-3xl font-bold text-white text-center mb-4">Sign Up</h1>
            <form class="flex flex-col gap-4" action="post_signup.php" method="post">
                <!-- Display error message -->
                <?php if (isset($_SESSION['signupAttempt']['message'])) { ?>
                    <div class="bg-gray-100 border-l-4 border-gray-500 text-gray-700 p-4 mb-2" role="alert">
                        <p><?= $_SESSION['signupAttempt']['message'] ?></p>
                    </div>
                <?php
                    unset($_SESSION['signupAttempt']['message']);
                }
                ?>
                <div>
                    <label for="name" class="font-medium text-white">Nama</label>
                    <input id="name" name="name" type="text" class="w-full p-1.5 rounded-md bg-[#5f5f5f] text-white focus:outline-0" value="<?php echo isset($_SESSION['signupAttempt']['name']) ? $_SESSION['signupAttempt']['name'] : ''; ?>" />
                </div>
                <div>
                    <label for="email" class="font-medium text-white">Email</label>
                    <input id="email" name="email" type="email" class="w-full p-1.5 rounded-md bg-[#5f5f5f] text-white focus:outline-0" value="<?php echo isset($_SESSION['signupAttempt']['email']) ? $_SESSION['signupAttempt']['email'] : ''; ?>" />
                </div>

                <div>
                    <label for="password" class="font-medium text-white">Password</label>
                    <input id="password" name="password" type="password" class="w-full p-1.5 rounded-md bg-[#5f5f5f]  text-white focus:outline-0" />
                </div>
                <div class="mt-8 flex flex-col gap-2">
                    <button class="w-full btn bg-white" type="submit" name="signup">Signup</button>
                    <p class="text-[#bababa]">Sudah punya akun? <a class="appearance-none text-white underline cursor-pointer hover:text-opacity-90" href="login.php">Masuk</a></p>
                </div>
            </form>
        </section>
    </main>
</body>

</html>