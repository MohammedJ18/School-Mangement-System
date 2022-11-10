<div>
    <div class="flex">
        <div>
            <img src="https://i.pravatar.cc/150?img=1" alt="" class="w-24 h-24 items-center">
        </div>
        <div class="mr-5 mt-6">
            <p class="text-xl font-semibold">{{ student->user->name }}</p>
            <p class="text-base">تاريخ الميلاد : {{ student->user->birth_date }}</p>
            <p class="">أولياء الامور: اب موسى , ام موسى , وشسمة</p>
        </div>
    </div>
    <div class="mt-10">
        @include('livewire.pages.profile.class-information')
    </div>
    <div>
        @include('livewire.pages.profile.current-grades')
    </div>
    <div class="mb-20">
        @include('livewire.pages.profile.previous-record')
    </div>
</div>
