<?php
session_start();
include("config.php");
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="global.css">
</head>

<body>
    <nav class="h-[70px] bg-[#7C32A1]">
        <div class="layout flex justify-between gap-4 items-center h-full">
            <div>
                <h1 class="text-white text-xl font-bold">Study.id</h1>
            </div>
            <div class="hidden md:flex justify-around gap-4 lg:gap-16 items-center">
                <div class="flex justify-around gap-2 lg:gap-6 items-center">
                    <a class="nav-item" href="./">Home</a>
                    <a class="nav-item opacity-100" href="./courses.php">Courses</a>
                    <a class="nav-item" href="./tutors.php">Tutors</a>
                    <a class="nav-item" href="./admissions.php">Admissions</a>
                    <a class="nav-item" href="./partners.php">Partners</a>
                </div>
                <div class="flex justify-around gap-2 lg:gap-6 items-center">
                    <a class="nav-item" href="./contact.php">Contact Us</a>
                    <a class="nav-item" href="./login.php">Login</a>
                    <button class="btn" role="button" onclick="window.location.href = './signup.php'">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="layout px-2 mt-8">
        <div class="flex justify-between">
            <h1 class="text-3xl text-white font-bold">Courses</h1>
            <button class="btn" onclick="window.location.href = './courses_form.php'">Tambah</button>
        </div>
        <form class="mt-4 w-full">
            <input id="search" name="search" class="w-full p-2 rounded-md bg-[#5f5f5f] text-white focus:outline-0 "
                placeholder="Search.." />
        </form>
        <section class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 xl:gap-x-16 gap-y-8 mt-8">
            <?php
            $query = "SELECT * FROM courses";
            $courses = mysqli_query($db, $query);

            while ($course = mysqli_fetch_assoc($courses)) {
                $id = $course['id'];
                ?>
                <div id="course-<?= $id ?>" class="p-6 bg-[#191919] text-white shine-white-sm rounded-lg cursor-pointer"
                    onclick="window.location.href = './courses_detail.php?nama=<?= $course['nama'] ?>'">
                    <img src="<?= $course['gambar_kursus'] ?>" class="w-full h-[200px] object-cover">
                    <div class='mt-4'>
                        <div class="flex gap-2 items-center">
                            <h1>
                                <?= $course['nama'] ?>
                            </h1>
                            <img src="./resources/check-mark.png" alt="Terdaftar" class="w-[12px] object-contain invert">
                        </div>
                        <p class="text-[#d1d5dc90] text-[14px]">
                            <?= $course['deskripsi'] ?>
                        </p>
                    </div>
                </div>
            <?php } ?>

        </section>
    </main>
</body>

</html>