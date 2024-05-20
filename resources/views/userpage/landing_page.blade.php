<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gradient-to-r from-indigo-400 via-indigo-500 to-indigo-900 overflow-hidden">
    <nav class="z-50 bg-black/50 backdrop-blur-sm w-full fixed flex items-center justify-between mx-auto px-10 py-4">
        <p class="text-2xl font-medium dark:text-white">
            StarBook</p>

    </nav>

    <div class="flex flex-col h-screen md:flex-row  justify-around py-40">
        <div class="flex flex-col justify-between  items-start gap-10">
            <div class="flex flex-col items-start text-white">
                <p class="font-light text-5xl">
                    Hello there! Welcome to
                    <br>
                    <span class="font-medium text-5xl">
                        StarBook</span>
                </p>
            </div>
            <div class="items-start text-white">
                <p class="font-light text-2xl">
                    Selamat Datang Di StarBook, Dimana anda Bisa <br> Membaca Buku Digital Dan Meminjam Buku</p>
            </div>
            <button
                class="text-indigo rounded-xl hover:before:bg-indigoborder-indigo-500 relative h-[50px] w-40 overflow-hidden border-2 border-white bg-white px-3 text-indigo-500 shadow-2xl transition-all before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-indigo-500 before:transition-all before:duration-500 hover:text-white hover:shadow-indigo-500 hover:before:left-0 hover:before:w-full"
                type="button">
                ,<span class="relative z-10 text-xl">Ayo mulai!</span>
            </button>


        </div>
        <img src="/assets/img/bOOk.png" class="h-full " alt="">



    </div>
</body>

</html>
