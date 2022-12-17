<div>
    <h1 class="text-2xl font-bold">
        الجداول
    </h1>
    <div class="flex justify-between mt-6">
        <div>
            <select class="border text-secondary-700 border-primary-100 w-36 text-sm h-10">
                <option selected value="1">الصف الأول</option>
                <option value="2">الصف الثاني</option>
                <option value="3">الصف الثالث</option>
                <option value="4">الصف الرابع</option>
                <option value="5">الصف الخامس</option>
                <option value="6">الصف السادس</option>
            </select>
            <select class="border text-secondary-700 border-primary-100 w-36 h-10 mr-10 text-sm">
                <option selected value="1">أ</option>
                <option value="2">ب</option>
                <option value="3">ج</option>
                <option value="4">د</option>
            </select>
        </div>
        <div>

        </div>
        <div>
            <button class="bg-primary-100 text-secondary-700 w-40 h-10">
                تعديل الجداول
            </button>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-6 m-6">
        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الأحد</span>
            </div>
            @for ($i = 0; $i < 5; $i++)
                <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                    <div class="row-span-4 text-lg font-semibold mt-3">العلوم</div>
                    <div class="row-span-2 text-xs text-left ml-2">8-9AM</div>
                </div>
            @endfor
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الأثنين</span>
            </div>
            @for ($i = 0; $i < 5; $i++)
                <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                    <div class="row-span-4 text-lg font-semibold mt-3">العلوم</div>
                    <div class="row-span-2 text-xs text-left ml-2">8-9AM</div>
                </div>
            @endfor
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الثلاثاء</span>
            </div>
            @for ($i = 0; $i < 5; $i++)
                <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                    <div class="row-span-4 text-lg font-semibold mt-3">العلوم</div>
                    <div class="row-span-2 text-xs text-left ml-2">8-9AM</div>
                </div>
            @endfor
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الأربعاء</span>
            </div>
            @for ($i = 0; $i < 5; $i++)
                <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                    <div class="row-span-4 text-lg font-semibold mt-3">العلوم</div>
                    <div class="row-span-2 text-xs text-left ml-2">8-9AM</div>
                </div>
            @endfor
        </div>

        <div>
            <div class="bg-secondary-200 w-40 h-14 py-4 px-7 text-center">
                <span class="text-lg font-semibold">الخميس</span>
            </div>
            @for ($i = 0; $i < 5; $i++)
                <div class="grid grid-rows-6 border-2 bg-white w-40 h-14 text-center mt-4">
                    <div class="row-span-4 text-lg font-semibold mt-3">العلوم</div>
                    <div class="row-span-2 text-xs text-left ml-2">8-9AM</div>
                </div>
            @endfor
        </div>
    </div>
</div>
