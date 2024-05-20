<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="min-h-screen bg-white grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col justify-between items-center gap-20 py-20 overflow-y-auto">
            <div class="flex flex-col items-center">
                <p class="font-medium text-xl">
                    StarBook</p>
                <p class="font-light text-5xl">
                    Create Account</p>
            </div>
            <form class="flex flex-col items-center gap-5">
                <!-- Formulir login -->
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="Fullname">
                        Fullname
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="Fullname" type="text" placeholder="Fullname">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Username">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="Email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="Email" type="text" placeholder="Email">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>
                <div class="w-full">
                    <label class="block text-black text-lg font-normal mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border border-black rounded w-full py-5 px-6 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>

                <button
                    class="bg-[#5E71E4] hover:bg-[#36449A] text-white font-semibold py-4 px-48 rounded focus:outline-none focus:shadow-outline text-2xl"
                    type="button">
                    Register
                </button>
                <div class="flex items-center w-fit gap-3">
                    <p class="font-semibold">Forgot your password?</p>
                    <a class="font-bold text-base text-blue-500 hover:text-blue-800 "
                        href="#">
                        Reset Password?
                    </a>
                </div>

            </form>
            <div class="flex gap-3">
                <p class="flex text-center">Have account?</p>
                <a class="flex justify-center items-center text-center align-baseline font-bold text-base text-blue-500 hover:text-blue-800"
                    href="#">
                    Log in
                </a>
            </div>
        </div>


        <div class="hidden md:block flex-1 bg-cover " style="background-image: url('assets/img/OrangBaca.png');"></div>
    </div>
    </div>

</body>

</html>
