<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex flex-col overflow-hidden w-screen h-screen">
        @include('components._navbar')
        <div class="flex h-full relative border">
            @include('components._sidebar')
            <main class="flex flex-col gap-10 h-[90.2vh] w-full p-5 pb-10 overflow-y-auto overflow-x-hidden">
                <div class="flex h-full flex-col gap-10">
                    <div class="flex flex-row gap-3">
                        <button type="button" class=" w-30 items-center justify-center px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                            <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>

                        </button>
                    </div>

                    <p class="text-xl font-medium text-black">Riwayat</p>
                    <div class="flex flex-col bg-slate-100 shadow-lg rounded-lg md:flex-row justify-center gap-6">
                        <div class="flex flex-col gap-5 p-2 md:border-r-2 w-full border-dashed border-black">
                            <div class="flex flex-row h-full p-5 gap-3">
                                <!-- Card Carousel -->
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <div class="">

                                    <h2 class="text-xl font-bold mb-2">Judul buku</h2>
                                    <p class="text-gray-700">Card content goes here.</p>
                                    <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Esse,
                                        recusandae? Odit qui adipisci totam soluta dicta delectus iusto sit asperiores
                                        dolorum,
                                        natus voluptas fuga deserunt molestiae ex laborum et ut.</p>
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-fit sm:h-full gap-5 shrink-0 p-8 ">
                            <!-- Card Carousel -->
                            <div class="flex flex-col justify-start w-full items-center ">
                                <h2 class="text-xl font-bold">Tanggal peminjaman</h2>
                                <p class="text-gray-700">9/11 - 9/11</p>
                            </div>

                            <div class="flex flex-col w-full  justify-center  items-center gap-4">
                                <span>Kondisi :</span>
                                <div class="border bg-blue-500 w-full py-2 rounded-lg text-center text-white">baik</div>
                                <span>Biaya :</span>
                                <div class="border bg-green-500 w-full py-2 rounded-lg text-center text-white">Rp. 0
                                </div>

                            </div>

                        </div>



                    </div>

                    <div class="flex flex-col bg-slate-100 shadow-lg rounded-lg md:flex-row justify-center gap-6">
                        <div class="flex flex-col gap-5 p-2 md:border-r-2 w-full border-dashed border-black">
                            <div class="flex flex-row h-full p-5 gap-3">
                                <!-- Card Carousel -->
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <div class="">

                                    <h2 class="text-xl font-bold mb-2">Judul buku</h2>
                                    <p class="text-gray-700">Card content goes here.</p>
                                    <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Esse,
                                        recusandae? Odit qui adipisci totam soluta dicta delectus iusto sit asperiores
                                        dolorum,
                                        natus voluptas fuga deserunt molestiae ex laborum et ut.</p>
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-fit sm:h-full gap-5 shrink-0 p-8 ">
                            <!-- Card Carousel -->
                            <div class="flex flex-col justify-start w-full items-center ">
                                <h2 class="text-xl font-bold">Tanggal peminjaman</h2>
                                <p class="text-gray-700">9/11 - 9/11</p>
                            </div>

                            <div class="flex flex-col w-full  justify-center  items-center gap-4">
                                <span>Kondisi :</span>
                                <div class="border bg-red-500 w-full py-2 rounded-lg text-center text-white">Rusak</div>
                                <span>Biaya :</span>
                                <div class="border bg-green-500 w-full py-2 rounded-lg text-center text-white">Rp.
                                    10.000
                                </div>

                            </div>

                        </div>



                    </div>

                    <div class="flex flex-col bg-slate-100 shadow-lg rounded-lg md:flex-row justify-center gap-6">
                        <div class="flex flex-col gap-5 p-2 md:border-r-2 w-full border-dashed border-black">
                            <div class="flex flex-row h-full p-5 gap-3">
                                <!-- Card Carousel -->
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <div class="">

                                    <h2 class="text-xl font-bold mb-2">Judul buku</h2>
                                    <p class="text-gray-700">Card content goes here.</p>
                                    <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Esse,
                                        recusandae? Odit qui adipisci totam soluta dicta delectus iusto sit asperiores
                                        dolorum,
                                        natus voluptas fuga deserunt molestiae ex laborum et ut.</p>
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-fit sm:h-full gap-5 shrink-0 p-8 ">
                            <!-- Card Carousel -->
                            <div class="flex flex-col justify-start w-full items-center ">
                                <h2 class="text-xl font-bold">Tanggal peminjaman</h2>
                                <p class="text-gray-700">9/11 - 9/11</p>
                            </div>

                            <div class="flex flex-col w-full  justify-center  items-center gap-4">
                                <span>Kondisi :</span>
                                <div class="border bg-gray-500 w-full py-2 rounded-lg text-center text-white">Hilang
                                </div>
                                <span>Biaya :</span>
                                <div class="border bg-green-500 w-full py-2 rounded-lg text-center text-white">Rp.
                                    50.000
                                </div>

                            </div>

                        </div>



                    </div>
                </div>


        </div>
    </div>

    </main>


    </div>
    </div>

</body>

</html>
