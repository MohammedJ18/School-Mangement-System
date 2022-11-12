<div class="max-w-6xl 2xl:max-w-full">
    <div class="flex">
        <div>
            <div class="flex">
                <button class="bg-primary-100 w-40 h-10">
                    فد شي
                </button>

                <button class="border-2 border-primary-100 w-40 h-10 mr-10">
                    هم فد شي
                </button>
            </div>

            <div class="mt-20">
                @include('livewire.pages.home.stats-card')
            </div>

            <div>
                <div class="mt-12 2xl:mt-16">
                    <p class="font-bold text-lg 2xl:text-2xl">أحصائيات سريعة</p>
                </div>
                <div class="flex flex-col gap-y-3 mt-4">
                    <div class="border-2 border-secondary-200 h-14 2xl:h-16"></div>
                    <div class="border-2 border-secondary-200 h-14 2xl:h-16"></div>
                    <div class="border-2 border-secondary-200 h-14 2xl:h-16"></div>
                </div>
            </div>
        </div>

        {{-- left side  --}}
        <div class="mt-9 mr-12 w-full">
            @include('livewire.pages.home.next-lessons')
        </div>
    </div>
</div>
