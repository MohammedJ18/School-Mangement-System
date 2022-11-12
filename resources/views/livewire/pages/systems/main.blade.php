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
            <div>
                <button class="border-2 border-secondary-200 w-full h-28 items-center flex justify-center">
                    <svg width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#888888" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                </button>
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
</div>
