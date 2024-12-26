<x-layout class="bg-gradient-to-b from-blue-50 to-white">
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8 font-poppins">
        <div class="text-center">
            <img src="{{ asset('img/image.png') }}" alt="Logo ITS"
                 class="w-40 h-40 mx-auto rounded-full mb-6 shadow-xl transform hover:scale-110 transition duration-500 ease-in-out">
            <h3 class="text-4xl font-extrabold text-blue-700">Contact Me</h3>
            <p class="mt-3 text-lg text-gray-700 italic">
                Nabilah Atika Rahma - 5025221005
            </p>
            <p class="mt-3 text-lg text-gray-700">
                <span class="font-semibold">Jurusan Informatika</span>, FTEIC, ITS
            </p>
            <p class="mt-3 text-lg text-gray-700">
                <span class="font-semibold">Location:</span> Surabaya, Indonesia
            </p>
            <p class="mt-3 text-lg text-gray-700">
                <span class="font-semibold">Email:</span> <a href="mailto:inielava@gmail.com" class="text-blue-600 hover:underline">nabilahatrix@gmail.com</a>
            </p>
            <p class="mt-3 text-lg text-gray-700">
                <span class="font-semibold">Phone:</span> <a href="tel:081234567890" class="text-blue-600 hover:underline">081234567890</a>
            </p>
            <div class="mt-6 flex justify-center space-x-4">
                <a href="/about"
                   class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300 shadow-md transform hover:scale-105">
                   About Me
                </a>
                <a href="/posts"
                   class="bg-gray-300 text-gray-900 px-6 py-2 rounded-full hover:bg-gray-400 transition duration-300 shadow-md transform hover:scale-105">
                   Explore Blog
                </a>
            </div>
        </div>
    </div>
</x-layout>
