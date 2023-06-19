<?php
session_start();
include("config.php");

if (!isset($_SESSION['loginID'])) {
    $user_id = $_SESSION['loginID'];
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
                    <a class="nav-item opacity-100" href="./courses.php">Courses</a>
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
    <main class="layout px-2 mt-8">
        <div class="flex justify-between">
            <h1 class="text-3xl text-white font-bold">Courses</h1>
            <?php
            // Check if the user is an admin
            if (isset($_SESSION['loginRole']) && $_SESSION['loginRole'] === 'admin') {
                echo '<button class="btn" role="button" onclick="window.location.href = \'./courses_form.php\'">Tambah</button>';
            }
            ?>
        </div>
        <form class="mt-4 w-full">
            <input id="search" name="search" class="w-full p-2 rounded-md bg-[#5f5f5f] text-white focus:outline-0 " placeholder="Search.." />
        </form>
        <section id="courseContainer" class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 xl:gap-x-16 gap-y-8 mt-8">
            <?php
            // $query = "SELECT * FROM courses";
            $user_id = $_SESSION['loginID'];
            $query = "SELECT c.*, c.id as c_id, a.*, a.id as a_id FROM courses c left join admission a on c.id = a.courses_id and a.user_id = $user_id";
            $courses = mysqli_query($db, $query);

            while ($course = mysqli_fetch_assoc($courses)) {
                $id = $course['c_id'];
                $admitted = $course['a_id'] != null ? true : false;
            ?>
                <div id="course-<?= $id ?>" class="p-6 bg-[#191919] text-white shine-white-sm rounded-lg cursor-pointer h-fit course" onclick="window.location.href = './courses_detail.php?id=<?= $id ?>'">
                    <?php if (isset($_SESSION['accessCourses']) && $_SESSION['accessCourses']['course_id'] == $id) { ?>
                        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-1 mb-2" role="alert">
                            <p><?= $_SESSION['accessCourses']['message'] . '. Please make an admission with Course ID: ' . $id ?></p>
                        </div>
                    <?php
                        unset($_SESSION['accessCourses']);
                    }
                    ?>
                    <img src="<?= $course['gambar_kursus'] ?>" class="w-full h-[200px] object-cover">
                    <div class='mt-4'>
                        <div class="flex gap-2 items-center">
                            <h1>
                                <?= $course['nama'] ?>
                            </h1>
                            <?php if ($admitted) { ?>
                                <img src="./resources/check-mark.png" alt="Terdaftar" class="w-[12px] object-contain invert">
                            <?php } ?>
                        </div>
                        <p class="text-[#d1d5dc90] text-[14px]">
                            <?= $course['deskripsi'] ?>
                        </p>
                    </div>
                </div>
            <?php } ?>

        </section>
    </main>
    <script>
        const searchInput = document.getElementById('search');
        const courseContainer = document.getElementById('courseContainer');
        const courses = Array.from(courseContainer.getElementsByClassName('course'));

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();

            courses.forEach(course => {
                const courseName = course.getElementsByTagName('h1')[0].innerText.toLowerCase();
                const courseDesc = course.getElementsByTagName('p')[0].innerText.toLowerCase();

                if (courseName.includes(query) || courseDesc.includes(query)) {
                    course.classList.remove('hidden');
                } else {
                    course.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>