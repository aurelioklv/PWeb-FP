<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <title>Homepage | Study.ai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
                    <a class="nav-item" href="./login.php">Login</a>
                    <button class="btn" role="button" onclick="window.location.href = './signup.php'">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="layout mt-10">
        <div class="flex flex-col md:flex-row justify-start gap-4 items-center">
            <img src="./uploads/moyaibutgru.png" />
            <div>
                <h1 class="text-4xl text-white font-bold">Courses1</h1>
                <p class="text-sm text-[#d1d5dc]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident,
                    iusto.
                </p>
            </div>
        </div>

        <h1 class="text-3xl text-white font-bold mt-10 underline">Content</h1>
        <p class="mt-4 text-white text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos illo sint,
            minus repudiandae nostrum amet libero accusamus voluptas esse, perferendis corporis. Nihil ducimus ullam
            eaque voluptatum nostrum exercitationem esse, nesciunt alias tempora sapiente, distinctio, sequi error modi
            perspiciatis! Necessitatibus porro officia tempora provident iste explicabo corrupti perferendis quae,
            eveniet numquam. Laborum, expedita! Ullam facilis molestias rerum molestiae et. Obcaecati deleniti sed est
            laboriosam eum ipsum fugit pariatur dolores, reiciendis voluptates laborum, fuga magnam enim cumque ab
            corrupti alias incidunt minima cum eaque? Qui, tenetur autem? Necessitatibus distinctio neque similique
            quia, mollitia, maxime dicta nulla, quibusdam soluta odit est illo quis.</p>
    </main>
</body>

</html>