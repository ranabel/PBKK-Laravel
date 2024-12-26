<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="bg-gradient-to-b from-blue-50 to-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto mt-10">
        <div class="flex flex-col items-center mb-6">
            <img class="h-40 w-40 rounded-full shadow-lg transform hover:scale-110 transition duration-300 ease-in-out"
                 src="{{ asset('img/image1.png') }}"
                 alt="Logo ITS">
            <h3 class="text-3xl font-bold mt-6 text-indigo-600 tracking-wide">Halaman About</h3>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-inner">
            <p class="text-lg text-gray-700 mb-3">
                <span class="font-semibold text-indigo-600">Nama:</span> {{ $name }}
            </p>
            <p class="text-lg text-gray-700 mb-3">
                <span class="font-semibold text-indigo-600">NRP:</span> 5025221005
            </p>
            <p class="text-lg text-gray-700 mb-3">
                <span class="font-semibold text-indigo-600">Mata Kuliah:</span> Pemrograman Berbasis Kerangka Kerja (PBKK)
            </p>
            <p class="text-lg text-gray-700 mb-3">
                <span class="font-semibold text-indigo-600">Fakultas:</span> FTEIC
            </p>
            <p class="text-lg text-gray-700 mb-3">
                <span class="font-semibold text-indigo-600">Jurusan:</span> Informatika
            </p>
        </div>
    </div>
</x-layout>
