<div>
    <p class="font-bold text-lg w-full 2xl:text-2xl 2xl:w-auto">ألمحاضرات القادمة</p>
    <div class="border-2 mt-4 h-auto ">
        <div class="mt-4 p-3">
            @for ($i = 0; $i < 7; $i++)
                <div class="flex flex-col mt-2 2xl:mt-5">
                    <div class="flex">
                        <p class="font-bold text-2xl mt-3 ml-2 mr-2 2xl:text-4xl 2xl:mr-4">08:30</p>
                        <div>
                            <p class="font-semibold text-lg 2xl:text-xl">كيمياء</p>
                            <p class="text-xs text-secondary-300 2xl:text-base"> السادس العلمي</p>
                        </div>
                    </div>
                    <div class=" h-1 w-auto mt-2 bg-red-500"></div>
                </div>
            @endfor


        </div>
    </div>
</div>
