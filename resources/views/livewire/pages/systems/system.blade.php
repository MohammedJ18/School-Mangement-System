<div>
    <div class="border-2 border-secondary-200 w-72 lg:w-72 xl:w-80 h-28 mt-4 p-3 mx-4 hover:scale-110 duration-300">
        <p class="font-bold text-lg">{{ $system->name }}</p>
        <p class=" text-secondary-500">
            @if ($system->type == 1) ابتدائية
            @elseif($system->type == 2)
                متوسطة
            @elseif($system->type == 3)
                اعدادية
            @elseif($system->type == 4)
                ثانوية
            @elseif($system->type == 5)
                معهد تعليمي
            @elseif($system->type == 6)
                كلية
            @endif
        </p>
        <p class=" text-secondary-500">{{ $system->address }}</p>
    </div>
</div>
