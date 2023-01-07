<div class="w-full">
    <h1 class="text-3xl mr-4">
        الصفوف
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 gap-x-6 mt-10">
        @foreach ($sections as $section)
            <a href="{{ route('section', $section->id) }}">
                <div>
                    <div class="border-2 border-secondary-200 w-72 lg:w-72 xl:w-80 h-28 mt-4 p-3 mx-4 hover:scale-110 duration-300">
                        <p class="font-bold text-lg">{{ $section->name }}</p>
                        <p class=" text-secondary-500">
                            عدد الشعب:
                            {{ $section->groups_count }}
                        </p>
                        <p class=" text-secondary-500">
                            عدد الطلاب:
                            {{ $section->students_count }}</p>
                    </div>
                </div>                
            </a>
        @endforeach
        @livewire('pages.sections.add-section')

    </div>

</div>
