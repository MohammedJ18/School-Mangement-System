<div>
    <div class="flex flex-col mt-2 2xl:mt-5">
        <div class="flex">
            <p class="font-bold text-2xl mt-3 ml-2 mr-2 2xl:text-4xl 2xl:mr-4">{{  date("g:i", strtotime($item->start_time))}}</p>
            <div>
                <p class="font-semibold text-lg 2xl:text-xl">{{ $item->subject->name }}</p>
                <p class="text-xs text-secondary-300 2xl:text-base">{{ $item->section->name }}</p>
            </div>
        </div>
        <div class=" h-1 w-auto mt-2 bg-red-500"></div>
    </div>
</div>
