<div>
    <h1 class="text-2xl font-bold">
        الجداول
    </h1>
    <div class="flex justify-between mt-6">
        <div>
            <select class="border text-secondary-700 border-primary-100 w-36 text-sm h-10"
            wire:model='section_id'>
                <option >اختر صف</option>
                @foreach ($sections as $section)
                <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
            </select>
            <select class="border text-secondary-700 border-primary-100 w-36 h-10 mr-10 text-sm"
            wire:model='group_id'>
                <option >اختر شعبة</option>
                @foreach ($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
        </div>
        <div>

        </div>
        <div class="flex ml-12 gap-x-5">
            {{-- <button class="bg-primary-100 text-secondary-700 w-40 h-10">
                تعديل
            </button> --}}
            @livewire('pages.schedules.add-schedule')
            {{-- @livewire('pages.schedules.edit-schedule') --}}

        </div>
    </div>

    <div class="grid grid-cols-5 gap-6 m-6">
        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الأحد</span>
            </div>
            @foreach ($sundayLessons as $lesson)
            <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                <div class="row-span-4 text-lg font-semibold mt-3">{{ $lesson->subject->name }}</div>
                <div class="row-span-2 text-xs text-left ml-2"> {{date("g:i", strtotime($lesson->start_time))}} - {{date("g:i", strtotime($lesson->end_time))}}</div>
            </div>
            @endforeach
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الأثنين</span>
            </div>
            @foreach ($mondayLessons as $lesson)
            <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                <div class="row-span-4 text-lg font-semibold mt-3">{{ $lesson->subject->name }}</div>
                <div class="row-span-2 text-xs text-left ml-2"> {{date("g:i", strtotime($lesson->start_time))}} - {{date("g:i", strtotime($lesson->end_time))}}</div>
            </div>
            @endforeach
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الثلاثاء</span>
            </div>
            @foreach ($tuesdayLessons as $lesson)
            <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                <div class="row-span-4 text-lg font-semibold mt-3">{{ $lesson->subject->name }}</div>
                <div class="row-span-2 text-xs text-left ml-2"> {{date("g:i", strtotime($lesson->start_time))}} - {{date("g:i", strtotime($lesson->end_time))}}</div>
            </div>
            @endforeach
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الأربعاء</span>
            </div>
            @foreach ($wednesdayLessons as $lesson)
            <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                <div class="row-span-4 text-lg font-semibold mt-3">{{ $lesson->subject->name }}</div>
                <div class="row-span-2 text-xs text-left ml-2"> {{date("g:i", strtotime($lesson->start_time))}} - {{date("g:i", strtotime($lesson->end_time))}}</div>
            </div>
            @endforeach
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الخميس</span>
            </div>
            @foreach ($thursdayLessons as $lesson)
            <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                <div class="row-span-4 text-lg font-semibold mt-3">{{ $lesson->subject->name }}</div>
                <div class="row-span-2 text-xs text-left ml-2"> {{date("g:i", strtotime($lesson->start_time))}} - {{date("g:i", strtotime($lesson->end_time))}}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
