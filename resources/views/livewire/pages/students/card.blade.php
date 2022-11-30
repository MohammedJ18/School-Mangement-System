<div>
    <div class="border-2 border-secondary-200 w-full h-20">
        <div class="p-3">
            <p class="font-semibold text-lg">{{$user->name}}</p>
            <div class="flex justify-between">
                <p class="">{{$user->student->section->name}} - {{$user->student->group->name}}</p>
                <p class="text-blue-400">جيد</p>
            </div>
        </div>
    </div>
</div>
