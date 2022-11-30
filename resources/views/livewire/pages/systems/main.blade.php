{{-- <div class="w-full">
    <div>
        <svg width="50" height="50" viewBox="0 0 206 222" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M205.212 205.652V7.44117C205.212 1.50312 197.786 0 197.786 0H45.1674C22.8885 0 22.8736 23.7894 22.8736 23.7894V214.083C22.8736 218.443 26.423 222 30.791 222H173.498C177.903 222 181.43 218.436 181.43 214.083L197.287 214.06C205.822 214.06 205.212 205.652 205.212 205.652ZM170.358 79.6578H94.6512V38.895H170.358V79.6578ZM181.43 145.073V32.0566C181.43 27.6737 177.896 24.1317 173.498 24.1317L38.4629 24.0648C38.4629 18.6178 46.663 15.8497 46.663 15.8497H181.43C189.861 15.8497 189.615 23.276 189.615 23.276V201.715C189.615 201.715 188.217 206.872 181.43 206.872V145.073ZM52.1695 86.9129C52.1695 93.4984 46.8342 98.8337 40.2636 98.8337H12.7015C6.11608 98.8262 0.780762 93.4909 0.780762 86.9129C0.780762 80.3424 6.11608 75.007 12.7015 75.007H40.2711C46.8342 75.007 52.1695 80.3424 52.1695 86.9129ZM52.1695 147.908C52.1695 154.479 46.8342 159.822 40.2636 159.822H12.7015C6.11608 159.822 0.780762 154.479 0.780762 147.908C0.780762 141.33 6.11608 135.995 12.7015 135.995H40.2711C46.8342 135.995 52.1695 141.33 52.1695 147.908Z"
                fill="#343434" />
        </svg>
    </div>
    <div class="flex w-full mt-10">
        <div class="flex flex-col">
                <div>
                    <button class="border-2 border-secondary-200 w-full h-28 items-center flex justify-center">
                        <svg width="32" height="32" viewBox="0 0 24 24">
                            <path fill="#888888" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                        </svg>
                    </button>
                </div>

             <div class="w-auto">
                dmkcs
            </div> --}}


<div class="w-full">
    <div>
        <svg width="50" height="50" viewBox="0 0 206 222" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M205.212 205.652V7.44117C205.212 1.50312 197.786 0 197.786 0H45.1674C22.8885 0 22.8736 23.7894 22.8736 23.7894V214.083C22.8736 218.443 26.423 222 30.791 222H173.498C177.903 222 181.43 218.436 181.43 214.083L197.287 214.06C205.822 214.06 205.212 205.652 205.212 205.652ZM170.358 79.6578H94.6512V38.895H170.358V79.6578ZM181.43 145.073V32.0566C181.43 27.6737 177.896 24.1317 173.498 24.1317L38.4629 24.0648C38.4629 18.6178 46.663 15.8497 46.663 15.8497H181.43C189.861 15.8497 189.615 23.276 189.615 23.276V201.715C189.615 201.715 188.217 206.872 181.43 206.872V145.073ZM52.1695 86.9129C52.1695 93.4984 46.8342 98.8337 40.2636 98.8337H12.7015C6.11608 98.8262 0.780762 93.4909 0.780762 86.9129C0.780762 80.3424 6.11608 75.007 12.7015 75.007H40.2711C46.8342 75.007 52.1695 80.3424 52.1695 86.9129ZM52.1695 147.908C52.1695 154.479 46.8342 159.822 40.2636 159.822H12.7015C6.11608 159.822 0.780762 154.479 0.780762 147.908C0.780762 141.33 6.11608 135.995 12.7015 135.995H40.2711C46.8342 135.995 52.1695 141.33 52.1695 147.908Z"
                fill="#343434" />
        </svg>
    </div>

    <div class="grid grid-cols-12 w-full mt-10">
        <div class="col-span-4">
            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen"
                    class="border-2 border-secondary-200 w-full h-28 items-center flex justify-center">
                    <svg width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#888888" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                </button>

                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                    role="dialog" aria-modal="true">
                    <div
                        class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
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
                                <h1 class="text-xl font-medium text-gray-800 ">اضافة نظام</h1>

                                <button @click="modelOpen = false"
                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>

                            <div>
                                <div class="mt-4">
                                    <label class="block text-sm font-medium text-gray-700 text-right">اسم
                                        المدرسة</label>
                                    <div class="mt-1">
                                        <input type="text" name="name" id="name"
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                            placeholder="المدرسة">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <label class="block text-sm font-medium text-gray-700 text-right">الموقع</label>
                                    <div class="mt-1">
                                        <input type="text" name="name" id="name"
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                            placeholder="الموقع">
                                    </div>
                                </div>
                                <button type="button"
                                    class="text-white bg-primary-100 font-medium rounded-lg w-full text-sm px-5 py-2.5 mr-2 mb-2 mt-6">أضافة</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="#">
                    @for ($i = 0; $i < 3; $i++)
                        @include('livewire.pages.systems.system')
                    @endfor
                </a>

            </div>

        </div>
        <div class="col-span-1">

        </div>
        <div class="col-span-7 border-2 border-secondary-200 p-4">
            @include('livewire.pages.systems.info')
        </div>
    </div>
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</div>
