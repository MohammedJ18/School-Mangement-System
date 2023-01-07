<div>
    <p class="text-xl font-bold">الطلبة</p>
    <div class="flex mt-4">
        <div class="flex flex-col md:flex-row w-full gap-y-4 md-gap-y-0">
            <input class="border-2 border-primary-100 w-2/3 md:w-1/2" type="text" wire:model="name"
                placeholder="اسم الطالب">
            <input class="border-2 border-primary-100 w-2/3 md:w-1/3 md:mr-16" type="text" placeholder="الصف">
        </div>
    </div>
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-10 gap-x-8 gap-y-4">
        @foreach ($students as $user)
            <a href="{{ route('profile', $user->student->id) }}">
                <livewire:pages.students.card :user="$user" key="{{ now() }}" />
            </a>
        @endforeach
    </div>
</div>
