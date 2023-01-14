<div class="max-w-6xl 2xl:max-w-full">
    <div class="flex">
        <div>
            <div class="flex">
                <a href="{{ route('absences') }}" class="bg-primary-100 py-2 px-7 text-center">
                        غيابات الطلاب
                </a>

                <a href="{{ route('schedule') }}" class="border-2 border-primary-100 py-2 px-5 text-center mr-10">
                    الجدول الاسبوعي
                </a>
            </div>
            <div>
                <div class="mt-20">
                    <div>
                        <p class="font-bold text-lg 2xl:text-2xl">أحصائيات سريعة</p>
                    </div>
                    <div class="flex gap-x-5 mt-3 2xl:mt-4">
                        @foreach ($counts as $item)
                            <livewire:pages.home.stats-card :item="$item" key="{{ now() }}" />
                            
                        @endforeach
                    </div>
                </div>

            </div>


            <div>
                <div class="mt-12 2xl:mt-16">
                    <p class="font-bold text-lg 2xl:text-2xl">اخر التبليغات</p>
                </div>
                <div class="flex flex-col gap-y-3 mt-4">
                    @foreach($systemNotifications as $notification)
                    <div class="border-2 border-secondary-200 h-auto w-auto p-2 rounded-md">{{ $notification->message }}</div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- left side  --}}
        <div class="mt-9 mr-12 w-full">
            <p class="font-bold text-lg w-full 2xl:text-2xl 2xl:w-auto">المحاضرات الحالية</p>
            <div class="border-2 mt-4 h-auto ">
                <div class="mt-4 p-3">
                    @foreach ($currentLessons as $item)
                        <livewire:pages.home.next-lessons :item="$item" key="{{ now() }}" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
