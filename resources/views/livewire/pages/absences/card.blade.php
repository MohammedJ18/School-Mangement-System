<div class="">
    <div class="border-2 border-secondary-200 h-20 w-72">
        <div class="p-3">
            <a href="{{ route('profile',$student->id)}}" class="font-semibold text-lg ">{{ $student->user->name }}</a>
            <div class="flex justify-between">
                <p class="">عدد مرات الغياب - <span class="text-blue-400 font-semibold">{{ $student->student_absences_count }}</span></p>
                <button wire:click='addNotification' class="text-green-500 font-semibold text-sm">تنبيه</button>
            </div>
        </div>
    </div>
</div>
