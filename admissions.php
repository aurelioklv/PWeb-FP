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
                    <a class="nav-item opacity-100" href="./admissions.php">Admissions</a>
                    <a class="nav-item" href="./partners.php">Partners</a>
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
            <!-- Display error message -->
            <?php if (isset($_SESSION['admissionAttempt']['message'])) { ?>
                <div class="bg-gray-100 border-l-4 border-gray-500 text-gray-700 p-4 mb-2" role="alert">
                    <p><?= $_SESSION['admissionAttempt']['message'] ?></p>
                </div>
            <?php
                unset($_SESSION['admissionAttempt']);
            }
            ?>
            <form class="flex flex-col gap-4" action="post_admission.php" method="post">
                <div>
                    <label for="nama" class="font-semibold text-[#1C1C1E]">ID Course</label>
                    <input id="nama" name="course_id" class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>" required />
                </div>
                <div class="flex flex-col gap-2">
                    <button class="w-full btn bg-[#1C1C1E] text-white" type="submit" name="admission-button">Daftar</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>