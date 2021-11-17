<x-app-layout>

    <section class="bg-cover bg-fixed" style="background-image: url({{asset('img/home/Academy-index.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-6xl">Senzor Academy</h1>
                <p class="text-white text-lg mt-2 mb-2">Comienza hoy tu formación en inyección electrónica y manejo de escáner con profesores en vivo</p>
                <!-- buscador -->
                @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h2 class="text-gray-600 text-center text-3xl mb-6">Contenido</h2>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <article>
                <figure>
                    <img class="rounded-xl mx-auto max-w-xs h-36 object-cover " src="{{asset('img/home/cursos.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h2 class="text-center text-2xl text-gray-700">Cursos</h2>
                </header>
                <p class="text-sm text-gray-500">En senzoracademy encontraras varis cursos con los cuales podras complementar tu formacion en inyeccion electronica!</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl mx-auto max-w-xs h-36 object-cover" src="{{asset('img/home/escaner.jpg')}}" alt="">
                </figure>
                
                <header class="mt-2">
                    <h2 class="text-center text-2xl text-gray-700">Escaner</h2>
                </header>
                <p class="text-sm text-gray-500">En senzoracademy encontraras varis cursos con los cuales podras complementar tu formacion en inyeccion electronica!</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl mx-auto max-w-xs h-36 object-cover" src="{{asset('img/home/herramientas.jpg')}}" alt="">
                </figure>
                
                <header class="mt-2">
                    <h2 class="text-center text-2xl text-gray-700">Herramientas</h2>
                </header>
                <p class="text-sm text-gray-500">En senzoracademy encontraras varis cursos con los cuales podras complementar tu formacion en inyeccion electronica!</p>
            </article>
            
            <article>
                <figure>
                    <img class="rounded-xl mx-auto max-w-xs h-36 object-cover" src="{{asset('img/home/manuales.jpg')}}" alt="">
                </figure>
                
                <header class="mt-2">
                    <h2 class="text-center text-2xl text-gray-700">Manuales</h2>
                </header>
                <p class="text-sm text-gray-500">En senzoracademy encontraras varis cursos con los cuales podras complementar tu formacion en inyeccion electronica!</p>
            </article>
        </div>
    </section>


    <section class="mt-24 bg-gray-700 py-12 ">

        <h1 class="text-center text-white text-3xl">Mira todos nuestros cursos disponibles!</h1>
        <p class="text-center text-white">Cursos con profesores en vivo, manejo de escaner, por marcas!</p>
        
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-red-600 hover:bg-black text-white font-bold py-2 px-4 rounded">
                Ver los Cursos!    
            </a>
        </div>
    </section>
    

    <section class="my-24">
        <h2 class="text-center text-3xl text-gray-600">Ultimos cursos!</h2>
        <p class="text-center text-gray-500 text-sm mb-6">Aqui encontraras nuestros ultimos cursos!</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-8 ">
            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach
        </div>
    </section>
</x-app-layout>

