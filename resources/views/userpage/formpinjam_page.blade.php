<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="min-h-screen bg-white grid grid-cols-1 md:grid-cols-2">


        <div class="flex flex-col justify-between items-center gap-20 py-20">
            {{-- <button
                    class="flex flex-col self-start before:ease relative w-20 overflow-hidden border border-white rounded-full bg-indigo-500 text-white shadow-2xl transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:shadow-indigo-500 hover:before:-translate-x-40 justify-start items-center py-2">
                    <span class="text-sm font-semibold justify-start items-start"><</span>
            </button> --}}


            <div class="flex flex-col items-center">

                <p class="font-light text-5xl">
                    Pinjam</p>
            </div>
            <form class="flex flex-col items-center gap-5 w-96">
                <!-- Formulir login -->
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Username">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="password">
                        Gmail
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="password">
                        Alamat
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="password">
                        Tanggal peminjaman
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="password">
                        Tanggal pengembalian
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>

                <button
                    class="relative h-12 w-40 overflow-hidden border border-indigo-600 text-indigo-600 shadow-2xl transition-all duration-200 before:absolute before:bottom-0 before:left-0 before:right-0 before:top-0 before:m-auto before:h-0 before:w-0 before:rounded-sm before:bg-indigo-600 before:duration-300 before:ease-out hover:text-white hover:shadow-indigo-600 hover:before:h-40 hover:before:w-40 hover:before:opacity-80 rounded-md ">
                    <span class="relative z-10 font-semibold ">Pinjam Sekarang!</span>
                </button>


            </form>

            

        </div>



        <div class="hidden md:block flex-1 bg-cover " style="background-image: url('assets/img/RakBuku.png');"></div>
    </div>
    </div>

</body>

</html>
