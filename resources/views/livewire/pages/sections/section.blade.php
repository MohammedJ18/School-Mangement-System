<div class="w-full">
    <h1 class="text-3xl mr-4">
        الشعب
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 gap-x-6 mt-10">
        @foreach ($groups as $group)
            <a href="{{ route('group', $group->id) }}">
                <div>
                    <div class="border-2 border-secondary-200 w-72 lg:w-72 xl:w-80 h-28 mt-4 p-3 mx-4 hover:scale-110 duration-300">
                        <p class="font-bold text-lg">{{ $group->name }}</p>
                        <p class=" text-secondary-500">
                            عدد الطلاب:
                            {{ $group->students_count }}</p>
                    </div>
                </div>                
            </a>
        @endforeach
        @livewire('pages.sections.add-group')
    </div>

</div>
