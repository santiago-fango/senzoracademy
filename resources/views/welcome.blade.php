<x-app-layout>

    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
  
       <div> 
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          </div>
        </div>
  
        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline">Aprende con nosotros en</span>
              <span class="block text-red-600 xl:inline">Senzoracademy</span>
            </h1>
            
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black md:py-4 md:text-lg md:px-10"> Cursos Presenciales </a>
                
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-red-700 bg-gray-100 hover:bg-red-200 md:py-4 md:text-lg md:px-10">Cursos virtuales</a>
              </div>
            </div>
            <!-- buscador -->
            @livewire('search')
          </div>
        </main>
      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="h-56 w-full object-fill sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image: url({{asset('img/home/Academy-index.jpg')}})" alt="">
    </div>
  </div>
  
  
    <section class="mt-7 bg-gray-700">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <article class=" mt-4 mb-4 col-span-2">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="py-12 bg-white rounded-2xl">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-red-600 font-semibold tracking-wide uppercase">Sobre nosotros</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Capacítate con nosotros</p>
                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">En <b>Senzor Academy</b> podrás encontrar diversos cursos para mejorar tu desempeño laboral</p>


                    </div>
                
                    <div class="mt-10">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Compromiso</p>
                            </dt>
                        </div>
                
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-black text-white">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path d="M272 191.9c-17.62 0-32 14.35-32 31.97V303.9c0 8.875-7.125 16-16 16s-16-7.125-16-16V227.4c0-17.37 4.75-34.5 13.75-49.37L299.5 48.41c9-15.12 4.125-34.76-11-43.88C273.1-4.225 255.8 .1289 246.1 13.63C245.1 13.88 245.5 13.88 245.4 14.13L128.1 190C117.5 205.9 112 224.3 112 243.3v80.24l-90.13 29.1C8.75 357.9 0 370.1 0 383.9v95.99c0 10.88 8.5 31.1 32 31.1c2.75 0 5.375-.25 8-1l179.3-46.62C269.1 450 304 403.8 304 351.9V223.9C304 206.3 289.6 191.9 272 191.9zM618.1 353.6L528 323.6V243.4c0-19-5.5-37.37-16.12-53.25l-117.3-175.9c-.125-.25-.6251-.2487-.75-.4987c-9.625-13.5-27.88-17.85-42.38-9.229c-15.12 9.125-20 28.76-11 44.01l77.75 129.5C427.3 193 432 210 432 227.5v76.49c0 8.875-7.125 16-16 16s-16-7.125-16-16V223.1c0-17.62-14.38-31.97-32-31.97s-32 14.38-32 31.1v127.1c0 51.87 34.88 98.12 84.75 112.4L600 511C602.6 511.6 605.4 512 608 512c23.5 0 32-21.25 32-31.1v-95.99C640 370.3 631.3 358 618.1 353.6z"/>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Confianza</p>
                            </dt>
                        </div>
                
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-black text-white">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mejoramiento Continuo</p>
                            </dt>
                        </div>
                
                        <div class="relative">
                            <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                <!-- Heroicon name: outline/annotation -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Adaptabilidad</p>
                            </dt>
                        </div>
                        </dl>
                    </div>
                    </div>
                </div>
            </article>

            <article class="lg:mt-4 lg:mb-4 rounded-2xl col-span-1 sm:mt-2 sm:mb-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18915.027167066168!2d-74.1101473648834!3d4.701308982139135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b913d314523%3A0xdeb8c79e424d3d8e!2sSenzor%20Academy!5e0!3m2!1ses!2sco!4v1645734806094!5m2!1ses!2sco" width="400" height="350" style="border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>

                 {{-- Iconos redes --}}
                <div>
                    <div class="flex flex-col p-1 m-1 bg-green-600 shadow-md rounded-2xl">
                        <a href="https://wa.link/4rgr44" target="_blank">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg viewBox="0 0 448 512 " class="w-8 h-8 rounded-2xl p-1">
                                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                    </svg>
                                    <div class="flex flex-col ml-1">
                                        <div class="font-medium leading-none text-white ">+57 350 336 3439</div>
                                    </div>
                                </div>
                        
                        
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-col p-1 m-1 bg-blue-600 shadow-md rounded-2xl">
                        <a href="https://www.facebook.com/senzorcolombia" target="_blank">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg viewBox="0 0 448 512 " class="w-8 h-8 rounded-2xl p-1">
                                        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                                    </svg>
                                    <div class="flex flex-col ml-1">
                                        <div class="font-medium leading-none text-gray-100">Senzor Colombia</div>
                                    </div>
                                </div>
                            
                            </div>
                        </a>
                    </div>
                    
                    <div class="flex flex-col p-1 m-1 bg-gradient-to-r from-yellow-500 via-pink-500 to-blue-500 shadow-md rounded-2xl">
                        <a href="https://www.instagram.com/senzor._" target="_blank">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512 " class="w-8 h-8 rounded-2xl p-1">
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                    </svg>
                                    <div class="flex flex-col ml-1">
                                        <div class="font-medium leading-none text-gray-100">instagram.com/senzor._</div>
                                    </div>
                                </div>
                            
                            </div>
                        </a>
                    </div>
                </div>
                 {{-- Fin iconos redes --}}
            </article>
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

