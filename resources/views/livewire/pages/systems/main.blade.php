<div class="w-full">
    <div class="flex">
        <div>
            <img src="{{ asset(auth()->user()->image_path) }}"
                alt="" class="w-24 h-24 items-center">
        </div>
        <div class="mr-5 mt-5">
            <div class="flex">
                <p class="text-xl font-semibold">{{ auth()->user()->name }}</p>
                <a href="">
                    <iconify-icon class="mt-2 mr-2" icon="mdi:pencil"></iconify-icon>
                </a>
            </div>
            <p class="text-base font-semibold text-secondary-500">المدير</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 gap-x-6 mt-10">
        @foreach ($systems as $system)
        <a href="{{ route('school', $system->id) }}">
            <livewire:pages.systems.system :system="$system" key="{{ now() }}"/>
        </a>
        @endforeach
        @livewire('pages.systems.add-system')

    </div>

</div>
