@props(['course'])

<article class="card">
    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
    <div class="card-body">
        <h2 class="card-title">{{Str::limit($course->title, 40)}}</h2>
        <p class="text-gray-500 tx-sm mb-2">Instructor: {{$course->teacher->name}}</p>

        <div>
            <ul class=" flex  text-sm " >
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i></li>
            </ul>

            <p class="mt-2 text-sm text-gray-500 ml-auto">
                <i class="fas fa-user"></i>
                ({{$course->students_count}})
            </p>


            <a href="{{route('courses.show', $course)}}" class="mt-5 btn btn-primary btn-block">
                Mas informacion
            </a>
        </div>    
    </div>
</article>