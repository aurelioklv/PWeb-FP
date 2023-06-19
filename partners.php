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
    <main class="layout px-2 mt-8">
        <div class="flex justify-between">
            <h1 class="text-3xl text-white font-bold">Partners</h1>
            <?php
            session_start();

            // Check if the user is an admin
            if (isset($_SESSION['loginRole']) && $_SESSION['loginRole'] === 'admin') {
                echo '<button class="btn" role="button" onclick="window.location.href = \'./partners_form.php\'">Tambah</button>';
            }
            ?>
        </div>
        <form class="mt-4 w-full">
            <input id="search" name="search" class="w-full p-2 rounded-md bg-[#5f5f5f] text-white focus:outline-0 " placeholder="Search.." />
        </form>
        <section id="partnersContainer" class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 xl:gap-x-16 gap-y-8 mt-8">
            <?php
            $query = "SELECT * FROM partners";
            $partners = mysqli_query($db, $query);

            while ($partner = mysqli_fetch_assoc($partners)) {
                $id = $partner['id'];
            ?>
                <div id="partner-<?= $id ?>" class="p-2 bg-[#191919] text-white shine-white-sm rounded-lg flex gap-4 items-center partner">
                    <img src="<?= $partner['logo'] ?>" class="w-[100px] h-[100px] object-cover">
                    <div>
                        <h1><?= $partner['nama'] ?></h1>
                        <p class="text-[#d1d5dc90] text-[14px]"><?= $partner['email'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
    <script>
        const searchInput = document.getElementById('search');
        const partnersContainer = document.getElementById('partnersContainer');
        const partners = Array.from(partnersContainer.getElementsByClassName('partner'));

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();

            partners.forEach(partner => {
                const partnerName = partner.querySelector('div > h1').innerText.toLowerCase();
                const partnerEmail = partner.querySelector('div > p').innerText.toLowerCase();

                if (partnerName.includes(query) || partnerEmail.includes(query)) {
                    partner.classList.remove('hidden');
                } else {
                    partner.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>