<div>
    <p class="text-xl font-bold">الطلبة</p>
    <div class="flex mt-4">
        <div class="flex w-full">
            <input class="border-2 border-primary-100 w-1/2" type="text" placeholder="اسم الطالب">
            <input class="border-2 border-primary-100 w-1/3 mr-16" type="text" placeholder="الصف">
        </div>

        <button class="bg-primary-100 w-11 h-11 mr-10 flex items-center p-2">
            <svg width="32" height="24" viewBox="0 0 24 24">
                <path fill="#888888"
                    d="m19.6 21l-6.3-6.3q-.75.6-1.725.95Q10.6 16 9.5 16q-2.725 0-4.612-1.887Q3 12.225 3 9.5q0-2.725 1.888-4.613Q6.775 3 9.5 3t4.613 1.887Q16 6.775 16 9.5q0 1.1-.35 2.075q-.35.975-.95 1.725l6.3 6.3ZM9.5 14q1.875 0 3.188-1.312Q14 11.375 14 9.5q0-1.875-1.312-3.188Q11.375 5 9.5 5Q7.625 5 6.312 6.312Q5 7.625 5 9.5q0 1.875 1.312 3.188Q7.625 14 9.5 14Z" />
            </svg>
        </button>
        <div>
            <button class="bg-primary-100 w-52 h-11 mr-10">
                متقدم
            </button>
        </div>
    </div>
    <div class="grid grid-cols-3 2xl:grid-cols-4 mt-10 gap-x-8 gap-y-4">
        @foreach ($students as $student)
            <a href="{{ route('profile',$student->id)}}">
                @livewire('pages.students.card', ['student' => $student])
            </a>
        @endforeach
    </div>
</div>
