<div>
    <p class="text-xl font-bold">المدرسين</p>
    <div class="flex mt-4">
        <div class="flex flex-col md:flex-row w-full gap-y-4 md-gap-y-0">
            <input class="border-2 border-primary-100 w-2/3 md:w-1/2" type="text" wire:model="name"
                placeholder="اسم التدريسي">
        </div>
        @livewire('pages.teachers.add-teacher')
    </div>
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-10 gap-x-8 gap-y-4">
        @foreach ($teachers as $teacher)
            <div>
                <div>
                    <div class="border-2 border-secondary-200 w-full h-20">
                        <div class="p-3">
                            <p class="font-semibold text-lg">{{$teacher->user->name}}</p>
                            <div class="flex justify-between">
                                <p class="">
                                    عدد الغيابات: 
                                    {{$teacher->count_absences ?? 0}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
