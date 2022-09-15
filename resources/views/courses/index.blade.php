<x-app-layout>
    {{-- Portada --}}
    <section class="bg-cover grid grid-cols-4" style="background-image:  url({{asset('img/cursos/portada.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 col-span-3">
            <div class="w-full md:w-3/4 lg:w-1/2 bg-black bg-opacity-50">
                <h1 class="text-white font-fold text-6xl">Diversos cursos para Diversas marcas</h1>
                <p class="text-white text-lg mt-2 mb-2">Encuentra cursos para tu marca favorita y para el uso de las mejores herramientas en inyeccion electronica</p>
                <!-- buscador -->
                @livewire('search')
            </div>
            <div class="col-span-1">
                @foreach ($courses as $course)
                    <x-course-card :course="$course"/>
                @endforeach
            </div>
        </div>
    </section>


    @livewire('courses-index')
</x-app-layout>