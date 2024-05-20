<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex flex-col overflow-hidden w-screen h-screen">
        @include('components._navbar')
        <div class="flex h-full relative">
            @include('components._sidebar')
            <main class="flex flex-col gap-10 h-[90vh] w-full p-5 overflow-y-auto overflow-x-hidden ">
                <div class="">
                    <p class="text-xl font-medium text-black">Rekomendasi</p>
                    <div class=" bg-gray-200 rounded-lg p-2">
                        <!-- Card Carousel -->
                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <p class="text-xl font-medium text-black">Populer</p>
                    <div class=" rounded-lg p-2">
                        <!-- Card Carousel -->
                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="">
                    <p class="text-xl font-medium text-black">Terakhir dibaca</p>
                    <div class=" rounded-lg p-2">
                        <!-- Card Carousel -->
                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                            <!-- Card 1 -->
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                                <p class="text-gray-700">Card content goes here.</p>
                            </div>
                            <div class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
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
