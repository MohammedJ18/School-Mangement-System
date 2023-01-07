<div>
    <p class="text-xl font-bold">الطلبة</p>
    <div class="flex mt-4">
        <div class="flex flex-col md:flex-row w-full gap-y-4 md-gap-y-0">
            <input class="border-2 border-primary-100 w-2/3 md:w-1/5" type="text" wire:model="name"
                placeholder="اسم الطالب">
            <input class="border-2 border-primary-100 w-2/3 md:w-1/5 md:mr-16" type="text" placeholder="الصف">
        </div>
    </div>
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-10 gap-x-8 gap-y-4">
        @foreach ($students as $student)
            <a href="{{ route('profile', $student->id) }}">
                <div>
                    <div class="border-2 border-secondary-200 w-full h-20">
                        <div class="p-3">
                            <p class="font-semibold text-lg">{{$student->user->name}}</p>
                            <div class="flex justify-between">
                                <p class="">{{$student->section->name}} - {{$student->group->name}}</p>
                                <p class="text-blue-400">جيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
