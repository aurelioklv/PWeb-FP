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
                    <a class="nav-item opacity-100" href="./">Home</a>
                    <a class="nav-item" href="./courses.php">Courses</a>
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
    <main class="layout">
        <section class="flex flex-col justify-center items-center h-screen -mt-[70px]">
            <div class="flex flex-col gap-2 w-fit mx-auto">
                <h1
                    class="text-6xl sm:text-[82px] leading-none font-semibold text-center bg-gradient-to-b from-[#7C32A1] to-white bg-clip-text text-transparent">
                    Study.id</h1>
                <p class="text-[#d1d5dc] text-sm sm:text-base leading-none text-center">Mulai belajar belajar bersama
                    kami</p>
                <div class="flex justify-between mt-6">
                    <button class="btn" onclick="window.location.href = './courses.php'">Belajar Sekarang</button>
                    <button class="btn" onclick="window.location.href = './signup.php'">Sign up</button>
                </div>
            </div>
        </section>
        <section class="mx-auto grid md:grid-cols-[40%_60%] w-full xl:w-[60%] gap-12">
            <img src="./resources/illustration.png" class="h-full object-cover rounded-lg mx-auto"></img>
            <div class="pt-8 pb-4 flex flex-col gap-8">
                <div class="flex flex-col gap-2">
                    <div class='w-[40px] h-[40px] bg-white flex flex-col justify-center items-center rounded-lg'>1</div>
                    <h1 class="text-white leading-none font-semibold text-3xl">Transformasi Akademik yang <span class="text-[#AF45E4]">Terbukti</span></h1>
                    <p class="text-[#d1d5dc] ">Bergabunglah dengan bimbel kami dan saksikanlah transformasi akademik
                        yang terbukti dalam kehidupan siswa.</p>
                </div>
                <div class="flex flex-col gap-2">
                    <div class='w-[40px] h-[40px] bg-white flex flex-col justify-center items-center rounded-lg'>2</div>
                    <h1 class="text-white leading-none font-semibold text-3xl">Pengalaman Belajar <span class="text-[#AF45E4]">Interaktif</span> dan
                    <span class="text-[#AF45E4]">Menyenangkan</span></h1>
                    <p class="text-[#d1d5dc] ">Dapatkan pengalaman belajar yang interaktif dan menyenangkan bersama
                        kami.</p>
                </div>
                <div class="flex flex-col gap-2">
                    <div class='w-[40px] h-[40px] bg-white flex flex-col justify-center items-center rounded-lg'>3</div>
                    <h1 class="text-white leading-none font-semibold text-3xl">Kurikulum yang <span class="text-[#AF45E4]">Komprehensif</span> dan
                    <span class="text-[#AF45E4]">Berstandar Tinggi</span></h1>
                    <p class="text-[#d1d5dc] ">Bimbel kami menawarkan kurikulum yang komprehensif dan berstandar tinggi
                        yang dirancang untuk memenuhi kebutuhan siswa di berbagai tingkungan.</p>
                </div>
            </div>
        </section>
        <section class="py-72 md:w-[80%] mx-auto">
            <h1 class="text-white font-bold text-3xl mb-10"><span class="text-[#AF45E4]">Dapat apa saja</span> di Study.id?</h1>
            <img class="w-full" src="./resources/grid.svg">
        </section>
    </main>
</body>

</html>