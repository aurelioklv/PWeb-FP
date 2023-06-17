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
    <main class="flex flex-col justify-center items-center min-h-screen">
        <h1 class="text-6xl text-white font-bold">Study.id</h1>
        <p class="text-white font-SEMIbold">Mulai Belajar Bersama Kami</p>
        <section class="shine-white mt-16 bg-[#1B1B1B] p-16 md:w-[50%] lg:w-[30%] mx-auto rounded-lg">
            <form class="flex flex-col gap-4">
                <div>
                    <label for="email" class="font-medium text-white">Email</label>
                    <input id="email" name="email" class="w-full p-1.5 rounded-md bg-[#5f5f5f] text-white focus:outline-0" />
                </div>

                <div>
                    <label for="password" class="font-medium text-white">Password</label>
                    <input id="password" name="password" class="w-full p-1.5 rounded-md bg-[#5f5f5f] text-white focus:outline-0" />
                </div>
                <div class="mt-8 flex flex-col gap-2">
                    <button class="w-full btn bg-white" type="submit">Login</button>
                    <p class="text-[#bababa]">Belum punya akun? <a
                            class="appearance-none text-white underline cursor-pointer hover:text-opacity-90"
                            href="signup.php">Daftar</a></p>
                </div>
            </form>
        </section>
    </main>
</body>

</html>