<x-app-layout>

<body>
<div class="grid gap-12 lg:grid-cols-2">
        <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
          <img src="https://tailus.io/sources/blocks/twocards/preview/images/woman.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
          <div class="sm:w-7/12 pl-0 p-5">
            <div class="space-y-2">
              <div class="space-y-4">
                <h4 class="text-2xl font-semibold text-cyan-900">Curso de Inyección Electrónica</h4>
                <p class="text-gray-600">Curso especializado en inyección electrónica multimarca (Yamaha, Suzuki, Honda, Kawasaki, Bajaj - Pulsar - Dominar, entre otros) Totalmente presencial - este contenido es material de apoyo para el curso presencial.</p>
              </div>
              <a href="{{route('inyeccion-electronica')}}" class="block w-max text-cyan-600">Leer Mas!</a>
            </div>
          </div>
        </div>
        <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
          <img src="https://tailus.io/sources/blocks/twocards/preview/images/man.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
          <div class="sm:w-7/12 pl-0 p-5">
            <div class="space-y-2">
              <div class="space-y-4">
                <h4 class="text-2xl font-semibold text-cyan-900">Provident de illo eveniet commodi fuga fugiat laboriosam expedita.</h4>
                <p class="text-gray-600">Laborum saepe laudantium in, voluptates ex placeat quo harum aliquam totam, doloribus eum impedit atque! Temporibus...</p>
              </div>
              <a href="www.tailus.io" class="block w-max text-cyan-600">Read more</a>
            </div>
          </div>
        </div>
      </div>
</body>
</x-app-layout>