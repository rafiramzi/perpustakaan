<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex flex-col overflow-hidden w-screen h-screen">
        @include('components._navbar')
        <div class="flex  relative">
            @include('components._sidebar')
            <main class="flex flex-col gap-10 h-[90vh] w-full p-5 overflow-y-auto overflow-x-hidden ">
                <div class="">
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-row gap-3">
                            <button type="button"
                                class=" w-30 items-center justify-center px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                                <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                </svg>

                            </button>
                        </div>

                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="flex flex-row gap-5 bg-gray-200 rounded-lg p-5">
                            <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md p-6 overflow-hidden">
                                <div class="flex flex-col items-center p-6">
                                    <img class="w-16 h-16 rounded-full" src="assets/img/team-2.jpg" alt="Profile Picture">
                                    <div class="mt-4 text-center">
                                        <div class="text-xl font-semibold text-gray-900">Nama Akun</div>
                                        <button type="button" class="mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                            </svg>
                                            Edit Profile
                                        </button>
                                    </div>
                                </div>


                            </div>


                            <div class="flex flex-col max-w-sm mx-auto bg-white rounded-lg shadow-md p-6 gap-5">
                                <div class="flex flex-col justify-center items-center text-xl font-semibold text-gray-900">Your profile</div>
                                <div class="flex flex-col items-start space-y-4">

                                    <div>
                                        <label class="text-gray-500">Username</label>
                                        <div class="text-lg font-semibold text-gray-900">username123</div>
                                    </div>
                                    <div>
                                        <label class="text-gray-500">Full Name</label>
                                        <div class="text-lg font-semibold text-gray-900">John Doe</div>
                                    </div>
                                    <div>
                                        <label class="text-gray-500">Gmail Address</label>
                                        <div class="text-lg font-semibold text-gray-900">johndoe@gmail.com</div>
                                    </div>
                                    <div>
                                        <label class="text-gray-500">Phone Number</label>
                                        <div class="text-lg font-semibold text-gray-900">+1234567890</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-5 bg-gray-200 rounded-lg p-5">
                            <!-- Card Carousel -->
                            <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                                <!-- Card 1 -->
                                <div class="">
                                    <p class="text-xl font-medium text-black">Terakhir dibaca</p>
                                    <div class=" bg-gray-500 rounded-lg p-2">
                                        <!-- Card Carousel -->
                                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                                            <!-- Card 1 -->
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover"
                                                        alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover"
                                                        alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover"
                                                        alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover"
                                                        alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                                <!-- Card 1 -->
                                <div class="">
                                    <p class="text-xl font-medium text-black">Favorite</p>
                                    <div class=" bg-gray-500 rounded-lg p-2">
                                        <!-- Card Carousel -->
                                        <div class="flex justify-center space-x-4 overflow-x-auto scrollbar-hide">
                                            <!-- Card 1 -->
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg" class="h-full w-full object-cover"
                                                        alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg"
                                                        class="h-full w-full object-cover" alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg"
                                                        class="h-full w-full object-cover" alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
                                            <div
                                                class="flex flex-col justify-center items-center object-center rounded-lg p-4 w-64">
                                                <div class="w-44 h-64 shadow-lg rounded-md shrink-0 overflow-hidden">
                                                    <img src="/assets/img/team-1.jpg"
                                                        class="h-full w-full object-cover" alt="">
                                                </div>
                                                <h2 class="text-xl font-bold mb-2 text-white">Card Title 1</h2>
                                                
                                            </div>
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
