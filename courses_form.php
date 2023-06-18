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
    <main class="flex flex-col justify-center items-center min-h-screen px-2 -mt-[70px]">
        <section class="shine-white mt-16 bg-white p-12 sm:p-16 md:w-[50%] lg:w-[40%] xl:w-[30%] mx-auto rounded-lg">
            <h1 class="text-3xl font-bold text-center mb-4" >Tambah Tutor</h1>
            <form class="flex flex-col gap-4">
                <div>
                    <label for="nama" class="font-semibold text-[#1C1C1E]">Nama Tutor</label>
                    <input id="nama" name="nama"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" required/>
                </div>
                <div>
                    <label for="deskripsi" class="font-semibold text-[#1C1C1E]">Deskripsi</label>
                    <input id="deskripsi" name="deskripsi"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" required/>
                </div>
                <div>
                    <label for="konten" class="font-semibold text-[#1C1C1E]">Konten</label>
                    <input id="konten" name="konten"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" required/>
                </div>
                <div>
                    <label for="gambar" class="font-semibold text-[#1C1C1E]">URL Gambar</label>
                    <input id="gambar" name="gambar"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" required/>
                </div>
                <div>
                    <label for="harga" class="font-semibold text-[#1C1C1E]">Harga</label>
                    <input id="harga" name="harga"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" required/>
                </div>
                <div>
                    <label for="id_tutor" class="font-semibold text-[#1C1C1E]">ID Tutor</label>
                    <input id="id_tutor" name="id_tutor"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" required/>
                </div>
                <div>
                    <label for="id_partner" class="font-semibold text-[#1C1C1E]">ID Partner</label>
                    <input id="id_partner" name="id_partner"
                        class="w-full p-1.5 rounded-md bg-[#d1d5dc] text-[#1C1C1E] focus:outline-0" />
                </div>
                <div class="mt-4 flex flex-col gap-2">
                    <button class="w-full btn bg-[#1C1C1E] text-white" type="submit">Tambah</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>