<div>
    <p class="text-xl font-bold">الطلبة</p>
    <div class="flex mt-4">
        <div class="flex flex-col md:flex-row w-full gap-4 md-gap-y-0">
            <input class="border-2 border-primary-100 w-2/3 md:w-1/4" type="text" wire:model="name"
                placeholder="اسم الطالب">
                <select class="border-2 border-primary-100 w-2/3 md:w-1/4"
                wire:model='section_id'>
                    <option value="">اختر صف</option>
                    @foreach ($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                    @endforeach
                </select>
                <select class="border-2 border-primary-100 w-2/3 md:w-1/4"
                wire:model='group_id'>
                    <option value="">اختر شعبة</option>
                    @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
        </div>
        @livewire('pages.sections.add-student')
    </div>
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-10 gap-x-8 gap-y-4">
        @foreach ($students as $student)
            <a href="{{ route('profile', $student->id) }}">
                <livewire:pages.students.card :student="$student" key="{{ now() }}" />
            </a>
        @endforeach
    </div>
</div>
