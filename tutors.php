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
    <title>Login | Study.ai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                    <a class="nav-item" href="./courses.php">Courses</a>
                    <a class="nav-item opacity-100" href="./tutors.php">Tutors</a>
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
    <main class="layout px-2 mt-8">
        <div class="flex justify-between">
            <h1 class="text-3xl text-white font-bold">Tutors</h1>
            <?php
            session_start();

            // Check if the user is an admin
            if (isset($_SESSION['loginRole']) && $_SESSION['loginRole'] === 'admin') {
            ?>
                <button class="btn" role="button" onclick="window.location.href = './tutors_form.php'">Tambah</button>
            <?php } ?>
        </div>
        <form class="mt-4 w-full">
            <input id="search" name="search" class="w-full p-2 rounded-md bg-[#5f5f5f] text-white focus:outline-0 " placeholder="Search.." />
        </form>
        <section id="tutorContainer" class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 xl:gap-x-16 gap-y-8 mt-8">
            <?php
            $query = "SELECT * FROM tutor";
            $tutors = mysqli_query($db, $query);

            while ($tutor = mysqli_fetch_assoc($tutors)) {
                $id = $tutor['id'];
            ?>
                <div id="tutor-<?= $id ?>" class="p-6 bg-[#191919] text-white shine-white-sm rounded-lg tutor">
                    <h1><?= $tutor['nama']  ?></h1>
                    <a href="mailto:<?= $tutor['email'] ?>" class="text-[#d1d5dc90]"><?= $tutor['email'] ?></a>
                    <?php
                    $query = "SELECT * FROM tutor t INNER JOIN courses c ON c.tutor_id = t.id  WHERE tutor_id = '$id' ORDER BY c.nama";
                    $courses = mysqli_query($db, $query);

                    $string = "Courses: ";
                    $courseCount = mysqli_num_rows($courses);
                    $currentCourse = 1;

                    while ($course = mysqli_fetch_assoc($courses)) {
                        $string .= $course['nama'];

                        if ($currentCourse < $courseCount) {
                            $string .= ", ";
                        }

                        $currentCourse++;
                    }
                    ?>
                    <p><?= $string; ?></p>
                </div>
            <?php } ?>
        </section>
    </main>
    <script>
        const searchInput = document.getElementById('search');
        const tutorContainer = document.getElementById('tutorContainer');
        const tutors = Array.from(tutorContainer.getElementsByClassName('tutor'));

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();

            tutors.forEach(tutor => {
                const tutorName = tutor.getElementsByTagName('h1')[0].innerText.toLowerCase();
                const tutorEmail = tutor.getElementsByTagName('a')[0].innerText.toLowerCase();
                const tutorCourses = tutor.getElementsByTagName('p')[0].innerText.toLowerCase();

                if (tutorName.includes(query) || tutorEmail.includes(query) || tutorCourses.includes(query)) {
                    tutor.classList.remove('hidden');
                } else {
                    tutor.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>