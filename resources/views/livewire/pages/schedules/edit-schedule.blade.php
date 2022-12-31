<div>
    <div x-data="{ modelOpen: false }">
        <button @click="modelOpen =!modelOpen" class="bg-primary-100 text-secondary-700 w-40 h-10">
            تعديل
        </button>

        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-lg p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="text-xl font-medium text-gray-800 ">اضافة درس</h1>

                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>

                    <form wire:submit.prevent="addSystem">
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">
                                الصف
                            </label>
                            <select
                                class="block w-full py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                <option selected value="1">الأحد</option>
                                <option value="2">الأثنين</option>
                                <option value="3">الثلاثاء</option>
                                <option value="4">الأربعاء</option>
                                <option value="4">الخميس</option>
                            </select>
                        </div>

                        <div class="flex justify-between">
                            <div class="mt-4 text-right flex flex-col">
                                <label class="text-sm font-medium text-gray-700 text-right">الشعبة</label>
                                <select class="border text-secondary-700 border-gray-300 w-52 h-10 mt-2 text-sm">
                                    <option selected value="1">أ</option>
                                    <option value="2">ب</option>
                                    <option value="3">ج</option>
                                    <option value="4">د</option>
                                </select>
                            </div>

                            <div class="mt-4 text-right flex flex-col">
                                <label class="text-sm font-medium text-gray-700 text-right">اليوم</label>
                                <select class="border text-secondary-700 border-gray-300 w-52 h-10 mt-2 text-sm">
                                    <option selected value="1">الأحد</option>
                                    <option value="2">الأثنين</option>
                                    <option value="3">الثلاثاء</option>
                                    <option value="4">الأربعاء</option>
                                    <option value="4">الخميس</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-between mt-4">
                            <div class="flex flex-col">
                                <label class="text-sm font-medium text-gray-700 text-right" for="appt">وقت
                                    البدء</label>

                                <input class="border text-secondary-700 border-gray-300 w-52 h-10 mt-2 text-sm"
                                    type="time" id="appt" name="appt"" required>
                            </div>

                            <div class="flex flex-col">
                                <label class="text-sm font-medium text-gray-700 text-right" for="appt">وقت
                                    البدء</label>

                                <input class="border text-secondary-700 border-gray-300 w-52 h-10 mt-2 text-sm"
                                    type="time" id="appt" name="appt"" required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">التدريسي</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name"
                                    class="block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                    placeholder="التدريسي">
                            </div>
                        </div>
                        <div class="flex justify-between w-full ml-2">
                            <div class="w-full ml-2">
                                <button type="submit"
                                    class="text-white bg-primary-100 font-medium w-full text-sm px-5 py-2.5 mb-2 mt-6">تعديل</button>
                            </div>
                            <div class="w-full mr-2">
                                <button type="submit"
                                    class="text-white bg-primary-100 font-medium w-full text-sm px-5 py-2.5 mb-2 mt-6">الغاء</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
