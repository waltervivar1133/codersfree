<x-app-layout>

    <section class="bg-cover" style="background-image: url({{ asset('img/home/fondo.jpg')}})">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
           <div class="w-full md:w-3/4 lg:w-1/2">
               <h1 class="text-white font-bold text-4xl">Domina la tecnologia con CodersFree</h1>
               <p class="text-white text-lg mt-2">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web</p>
               <div class="pt-2 relative mx-auto text-gray-600">
                <input class=" w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                  type="search" name="search" placeholder="Search">
                  <button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 absolute right-0 top-0 mt-2 ">
                    Buscar
                  </button>

              </div>
            </div>
       </div>
    </section>

</x-app-layout>

