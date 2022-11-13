<div>
    <div class="flex">
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlPYMmIQYsXtA80h2rAHHYIgq3OgDxJ2hPRA&usqp=CAU" alt="" class="w-24 h-24 items-center">
        </div>
        <div class="mr-5 mt-6">
            <p class="text-xl font-semibold">{{ $student->user->name }}</p>
            <p class="text-base font-semibold">تاريخ الميلاد : {{ $student->user->birth_date }}</p>
            <p class="font-semibold">أولياء الامور:
                @foreach($student->parents As $parent)
                    <a href="#">{{$parent->user->name}}</a>
                @endforeach
            </p>
        </div>
    </div>
    <div class="mt-10">
        @include('livewire.pages.profile.class-information')
    </div>
    <div>
        @include('livewire.pages.profile.current-grades')
    </div>
    <div class="mb-20">
        @include('livewire.pages.profile.previous-record')
    </div>
</div>
