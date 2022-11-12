<div>
    <p>معلومات الصف الحالي:</p>
    <div class="flex justify-between border-2 w-full h-auto border-secondary-200 mt-4 py-5 px-10">
        <p class="text-base font-semibold">{{$student->section->name}} - {{$student->group->name}}</p>
        <p class="text-base font-semibold">التقدير العام: <span class="text-blue-400">جيد</span></p>
        <p class="text-base font-semibold">الغيابات: {{$student ->student_absences_count}}</p>
    </div>
</div>
