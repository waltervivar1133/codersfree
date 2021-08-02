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

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  | grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6  ">
            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/img1.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, iusto animi saepe
                </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/img2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, iusto animi saepe
                </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/img3.png')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, iusto animi saepe
                </p>
            </article>
            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover"src="{{asset('img/home/img4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, iusto animi saepe
                </p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-white text-center">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
        <div class="flex justify-center">
            <a href="{{ route('courses.index')}}" class="py-2 px-4 bg-red-700 text-white font-semibold rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75  right-0 top-0 mt-2 ">
                Catalogo de cursos
              </a>
        </div>


    </section>

    <section class="mt-24">
        <h1 class="text-center text-3xl uppercase text-gray-600">ultimos cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit amet consectetur </p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach($courses as $course )
                <article>
                    {{ Storage::url($course->img->url)}}
                    {{Storage('cursos/fe65e52463f78c1a67344cf46f830627.png')}}

                </article>
            @endforeach

        </div>
    </section>
</x-app-layout>

