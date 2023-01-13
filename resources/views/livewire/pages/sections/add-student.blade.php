<div>
    <div x-data="{ modelOpen: false }">
        <button @click="modelOpen =!modelOpen" class="bg-primary-100 text-secondary-700 w-40 h-10">
            اضافة طالب
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
                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="text-xl font-medium text-gray-800 ">اضافة طالب</h1>

                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>

                    <form wire:submit.prevent="addStudent">
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">اسم
                                الطالب</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" wire:model="name"
                                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                    placeholder="الطالب" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">اسم
                                المعرف</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" wire:model="username"
                                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                    placeholder="المعرف" required>
                            </div>
                        </div>
                        @if($username)
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">
                                كلمة المرور
                                </label>
                            <div class="mt-1">
                                <input type="password" wire:model="password"
                                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                    >
                            </div>
                        </div>
                        @endif
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">
                                تاريخ الميلاد
                                </label>
                            <div class="mt-1">
                                <input type="date" name="name" id="name" wire:model="birth_date"
                                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                    placeholder="الميلاد" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">اسم
                                المعرف</label>
                            <div class="mt-1">
                                <input type="file" name="name" id="name" wire:model="image_path"
                                    class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                    placeholder="المعرف" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">
                                الصف
                            </label>
                            <select wire:model='section_id'
                                class="block w-full py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                <option >اختر الصف</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 text-right">
                                الشعبة
                            </label>
                            <select wire:model='group_id'
                                class="block w-full py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                <option >اختر شعبة</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit"
                            class="text-white bg-primary-100 font-medium rounded-lg w-full text-sm px-5 py-2.5 mr-2 mb-2 mt-6">أضافة</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
