<x-layout>
    <div class="min-h-screen flex flex-col bg-gradient-to-b from-blue-50 to-white">

      <!-- Main Content -->

      <main class="flex-grow container mx-auto px-4 py-12 flex flex-col items-center justify-center">
        <div class="max-w-2xl mx-auto text-center">
          <img src="{{ asset('img/Lambang-ITS-2-300x300.png') }}" alt="Foto Profil" class="w-32 h-32 rounded-full mx-auto mb-6 shadow-lg transform hover:scale-110 transition duration-300" />
          <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Hello, I'm Abel!</h2>
          <p class="text-lg text-blue-600 font-semibold">PBKK - LARAVEL</p>
          <p class="text-lg text-gray-700 mb-8 italic">Nabilah Atika Rahma | 5025221005</p>
          <div class="space-x-4">
            <a href="/posts" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300 shadow-md transform hover:translate-y-1">Explore Blog</a>
            <a href="/about" class="bg-gray-300 text-gray-900 px-6 py-2 rounded-full hover:bg-gray-400 transition duration-300 shadow-md transform hover:translate-y-1">About Me</a>
          </div>
        </div>
      </main>

      <!-- Footer -->
      <footer class="bg-gray-100 border-t">
        <div class="container mx-auto px-4 py-4 text-center text-gray-700">
          <p>&copy; 2024 PBKK | 5025221005</p>
        </div>
      </footer>
    </div>
</x-layout>

