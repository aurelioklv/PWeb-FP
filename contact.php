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
                    <a class="nav-item" href="./courses.php">Courses</a>
                    <a class="nav-item" href="./tutors.php">Tutors</a>
                    <a class="nav-item" href="./admissions.php">Admissions</a>
                    <a class="nav-item" href="./partners.php">Partners</a>
                </div>
                <div class="flex justify-around gap-2 lg:gap-6 items-center">
                    <a class="nav-item opacity-100" href="./contact.php">Contact Us</a>
                    <a class="nav-item" href="./login.php">Login</a>
                    <button class="btn" role="button" onclick="window.location.href = './signup.php'">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex flex-col justify-center items-center min-h-screen px-2 -mt-[70px]">
        <section
            class="grid grid-cols-[60%_40%] gap-16 shine-white mt-16 bg-white p-12 sm:p-16 md:w-[85%] lg:w-[70%] xl:w-[60%] mx-auto rounded-lg">
            <form class="flex flex-col gap-4">
                <div>
                    <label for="nama" class="font-semibold text-[#1C1C1E]">Nama</label>
                    <input id="nama" name="nama"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" />
                </div>
                <div>
                    <label for="email" class="font-semibold text-[#1C1C1E]">Email</label>
                    <input id="email" name="email"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" />
                </div>

                <div>
                    <label for="nohp" class="font-semibold text-[#1C1C1E]">Nomor HP</label>
                    <input id="nohp" name="nohp"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" />
                </div>

                <div>
                    <label for="pesan" class="font-semibold text-[#1C1C1E]">Pesan</label>
                    <textarea rows="5" id="pesan" name="pesan"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc]  text-[#1C1C1E] focus:outline-0"></textarea>
                </div>
                <div class="mt-8 flex flex-col gap-2">
                    <button class="w-full btn bg-[#1C1C1E] text-white" type="submit">Kirim Pesan</button>
                </div>
            </form>
            <section class="flex flex-col gap-8">
                <div>
                    <h1 class="text-lg font-bold">Hubungi Kami</h1>
                    <p>+62978098211</p>
                </div>
                <div>
                    <h1 class="text-lg font-bold">Alamat</h1>
                    <p>Jl. Mulyosari Selatan 36B</p>
                </div>
                <div>
                    <h1 class="text-lg font-bold">Email</h1>
                    <p>support@study.id</p>
                </div>
            </section>
        </section>
    </main>
</body>

</html>