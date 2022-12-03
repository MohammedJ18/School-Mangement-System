<div class="">
    <div class="flex">
        <div>
            <img src="{{ asset($student->user->image_path) }}" alt="" class="w-24 h-24 items-center">
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
        <livewire:pages.profile.class-information :student="$student" key="{{ now() }}"/>
    </div>
    <div>
        @livewire('pages.profile.current-grades')
    </div>
    <div class="mb-20">
        @livewire('pages.profile.records')
    </div>
</div>
