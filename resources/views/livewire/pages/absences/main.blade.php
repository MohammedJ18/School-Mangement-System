<div>
    <h3 class="font-bold text-xl">جدول الغيابات</h3>

    <div class="flex gap-x-6 mt-6">
        <div>
            <select class="border border-primary-100 text-gray-900 text-sm w-40">
                <option selected value="1">الصف الأول</option>
                <option value="2">الصف الثاني</option>
                <option value="3">الصف الثالث</option>
                <option value="4">الصف الرابع</option>
                <option value="5">الصف الخامس</option>
                <option value="6">الصف السادس</option>
            </select>
        </div>
        <div>
            <select class="border border-primary-100 text-gray-900 text-sm w-32">
                <option selected value="1">أ</option>
                <option value="2">ب</option>
                <option value="3">ج</option>
                <option value="4">د</option>
            </select>
        </div>
        <div>
            <input type="date" class="border border-primary-100 text-gray-900 text-sm w-32 block">
        </div>
    </div>

    {{-- the card --}}
    <div class="grid grid-cols-3 gap-x-8 gap-y-6 mt-10">
        @foreach ($students as $student)
            <livewire:pages.absences.card :student="$student" key="{{ now() }}" />
        @endforeach
    </div>
</div>
