           {{-- Success is as dangerous as failure. --}}

    <form class="pt-2 relative mx-auto text-gray-600" autocomplete="off" >
        <input wire:model="search" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
        type="search" name="search" placeholder="¿Que desesas aprender hoy?">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded right-0 top-0 mt-2 absolute">
            Buscar
        </button>

        @if ($search)
            <ul class="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
                @forelse ($this->results as $result)
                    <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-red-500 hover:text-white">
                        <a href="{{route('courses.show', $result)}}">{{$result->title}}</a>
                    </li>
                    @empty
                        <li class="leading-10 px-5 text-sm ">No hay coincidencias</li>
                @endforelse
            </ul>
        @endif
    </form>
 