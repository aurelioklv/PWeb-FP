<?php
session_start();
include("config.php");

if (!isset($_SESSION['loginID'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <title>Homepage | Study.ai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="global.css">
</head>
<style>
</style>

<body>
    <nav class="h-[70px] bg-[#7C32A1]">
        <div class="layout flex justify-between gap-4 items-center h-full">
            <div>
                <h1 class="text-white text-xl font-bold">Study.id</h1>
            </div>
            <div class="hidden md:flex justify-around gap-4 lg:gap-16 items-center">
                <div class="flex justify-around gap-2 lg:gap-6 items-center">
                    <a class="nav-item" href="./">Home</a>
                    <a class="nav-item" href="./courses.php">Courses</a>
                    <a class="nav-item" href="./tutors.php">Tutors</a>
                    <a class="nav-item" href="./admissions.php">Admissions</a>
                    <a class="nav-item opacity-100" href="./partners.php">Partners</a>
                </div>
                <div class="flex justify-around gap-2 lg:gap-6 items-center">
                    <a class="nav-item" href="./contact.php">Contact Us</a>
                    <button class="btn" role="button" onclick="window.location.href = './logout.php'">Log Out</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex flex-col justify-center items-center min-h-screen px-2 -mt-[70px]">
        <section class="shine-white mt-16 bg-white p-12 sm:p-16 md:w-[50%] lg:w-[40%] xl:w-[30%] mx-auto rounded-lg">
            <h1 class="text-3xl font-bold text-center mb-4">Tambah Partner</h1>
            <form class="flex flex-col gap-4" action="post_partner.php" method="post">
                <div>
                    <label for="nama" class="font-semibold text-[#1C1C1E]">Nama Partner</label>
                    <input id="nama" name="nama" type="text" class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" value="<?php echo isset($_SESSION['addPartnerAttempt']['name']) ? $_SESSION['addPartnerAttempt']['name'] : ''; ?>" required />
                </div>
                <div>
                    <label for="email" class="font-semibold text-[#1C1C1E]">Email</label>
                    <input id="email" name="email" type="email" class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" value="<?php echo isset($_SESSION['addPartnerAttempt']['email']) ? $_SESSION['addPartnerAttempt']['email'] : ''; ?>" required />
                </div>
                <div>
                    <label for="logo" class="font-semibold text-[#1C1C1E]">URL Logo</label>
                    <input id="logo" name="logo" type="text" class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" required />
                </div>
                <div class="mt-4 flex flex-col gap-2">
                    <button class="w-full btn bg-[#1C1C1E] text-white" type="submit" name="partner-button">Tambah</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>