<div>
    <p class="mt-10">درجات الطالب الحالية:</p>
    {{-- <div class="border-2 w-full h-auto border-secondary-200 mt-4 py-5 px-10">
            ما اعرف شلون راح يصير عرض الدرجات
        </div> --}}


    <div class="overflow-x-auto relative mt-3">
        <table class="w-full text-sm  border-secondary-200">
            <thead class="text-xs bg-primary-100">
                <tr>
                    <th scope="col" class="py-1 px-3 border-x border-b-secondary-200">
                        المادة
                    </th>
                    <th scope="col" class="py-1 px-3 border-x border-b-secondary-200">
                        درجة الشهر الأول
                    </th>
                    <th scope="col" class="py-1 px-3 border-x border-b-secondary-200">
                        درجة الشهر الثاني
                    </th>
                    <th scope="col" class="py-1 px-3 border-x border-b-secondary-200">
                        درجة الشهر الثالث
                    </th>
                    <th scope="col" class="py-1 px-3 border-x border-b-secondary-200">
                        السعي
                    </th>
                    <th scope="col" class="py-1 px-3 border-x border-b-secondary-200">
                        التقدير
                    </th>
                </tr>
            </thead>
            <tbody class="border">
                @for ($i = 0; $i < 8; $i++)
                    <tr class="">
                        <th scope="row"
                            class="py-1 px-3 border border-b-secondary-200 font-semibold whitespace-nowrap">
                            العلوم
                        </th>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            100
                        </td>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            100
                        </td>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            99
                        </td>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            99
                        </td>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            جيد
                        </td>
                    </tr>
                @endfor

            </tbody>
        </table>
    </div>

</div>
