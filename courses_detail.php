<?php
session_start();

include("config.php");

if (!isset($_SESSION['loginID'])) {
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['loginID'];
$course_id = $_GET['id'];
$query = "SELECT * FROM admission WHERE user_id = $user_id AND courses_id = $course_id";
$admission = mysqli_query($db, $query);
if (!mysqli_num_rows($admission)) {
    $ret = array(
        'success' => false,
        'message' => 'Unauthorized',
        'course_id' => $course_id,
    );
    $_SESSION['accessCourses'] = $ret;
    header("Location: courses.php#course-$course_id");
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
                    <a class="nav-item  opacity-100" href="./courses.php">Courses</a>
                    <a class="nav-item" href="./tutors.php">Tutors</a>
                    <a class="nav-item" href="./admissions.php">Admissions</a>
                    <a class="nav-item" href="./partners.php">Partners</a>
                </div>
                <div class="flex justify-around gap-2 lg:gap-6 items-center">
                    <a class="nav-item" href="./contact.php">Contact Us</a>
                    <button class="btn" role="button" onclick="window.location.href = './logout.php'">Log Out</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="layout mt-10">
        <?php
        $query = "SELECT * FROM courses WHERE id = $course_id";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="flex flex-col md:flex-row justify-start gap-4 items-center">
            <img src="./uploads/moyaibutgru.png" />
            <div>
                <h1 class="text-4xl text-white font-bold"><?= $row['nama'] ?></h1>
                <p class="text-sm text-[#d1d5dc]"><?= $row['deskripsi'] ?></p>
            </div>
        </div>

        <h1 class="text-3xl text-white font-bold mt-10 underline">Content</h1>
        <p class="mt-4 text-white text-justify"><?= $row['konten'] ?></p>
    </main>
</body>

</html>