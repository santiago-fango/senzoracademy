<x-app-layout>

<body>
    <div class="grid gap-12 lg:grid-cols-2 lg:p-6 p-2">
        <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
          <img src="{{asset('img/presenciales/portada-inyeccion-electronica-presencial.png')}}" alt="inyeccion electronica" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
          <div class="sm:w-7/12 pl-0 p-5">
            <div class="space-y-2">
              <div class="space-y-4">
                <h4 class="text-2xl font-semibold text-black">Curso de Inyección Electrónica</h4>
                <p class="text-gray-600">Curso especializado en inyección electrónica multimarca (Yamaha, Suzuki, Honda, Kawasaki, Bajaj - Pulsar - Dominar, entre otros) Totalmente presencial.</p>
              </div>
              <a href="{{route('inyeccion-electronica')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero Saber Mas!</a>
            </div>
          </div>
        </div>
        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/portada-electricidad-en-motocicletas-presencial.png')}}" alt="Electricidad Basica" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Curso Electricidad Basica.</h4>
                  <p class="text-gray-600">Aprende todo lo que tienes que saber sobre Electricidad En Motocicletas Con nosotros de manera totalmente presencial</p>
                </div>
                <a href="{{route('electricidad-basica')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero Saber Mas!</a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{asset('img/presenciales/portada-mecanica-de-alto-cilindraje-presencial.png')}}" alt="Mecanica de alto cilindraje" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">Curso Alto Cilindraje.</h4>
                  <p class="text-gray-600">curso de Preparación Electrónica en Motocicletas de Alto Rendimiento y Competición, brindado de manera presencial en nuestra sede SENZOR ACADEMY.</p>
                </div>
                <a href="{{route('alto-rendimiento')}}" class="w-full flex items-center justify-center p-1 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-black">Quiero Saber Mas!</a>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</x-app-layout>