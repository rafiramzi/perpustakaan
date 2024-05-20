<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favorite</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex flex-col overflow-hidden w-screen h-screen">
        @include('components._navbar')
        <div class="flex h-full relative">
            @include('components._sidebar')
            <main class="flex flex-col gap-10 h-[90vh] w-full p-5 overflow-y-auto overflow-x-hidden ">
                <div class="">
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-row gap-3">
                            <button type="button" class=" w-30 items-center justify-center px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                                <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                </svg>

                            </button>
                        </div>

                        <p class="text-xl font-medium text-black">Favorite</p>
                    </div>
                    <div class="flex flex-col gap-5 bg-gray-200 rounded-lg p-2">
                        <!-- Card Carousel -->
                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                            <!-- Card 1 -->
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>


                        </div>
                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                            <!-- Card 1 -->
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>

                        </div>
                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                            <!-- Card 1 -->
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div
                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>


                        </div>
                    </div>
                </div>
            </main>


        </div>
    </div>

</body>

</html>
