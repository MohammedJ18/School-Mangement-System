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
                        درجة نهاية الفصل
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
                            @if ($i == 0)
                                اللغة العربية
                            @elseif($i == 1)
                                اللغة الانجليزية
                            @elseif($i == 2)
                                الرياضيات
                            @elseif($i == 3)
                                العلوم
                            @elseif($i == 4)    
                                الفيزياء
                            @elseif($i == 5)    
                                الكيمياء
                            @elseif($i == 6)
                                الاحياء
                            @elseif($i == 7)    
                                الاجتماعيات
                            @endif
                        </th>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            @php $rand = rand(0, 25);
                            $sum = 0;
                            $sum += $rand;
                            @endphp
                            {{ $rand }}
                        </td>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            @php $rand = rand(0, 25); 
                            $sum += $rand;
                            @endphp
                            {{ $rand }}
                        </td>

                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            @php $rand = rand(0, 50);
                            $sum += $rand;@endphp
                            {{ $rand }}
                        </td>
                        <td class="py-1 px-3 border border-secondary-200 font-semibold whitespace-nowrap text-center">
                            @if ($sum >= 90)
                                ممتاز
                            @elseif($sum >= 80)
                                جيد جدا
                            @elseif($sum >= 70)
                                جيد
                            @elseif($sum >= 60)
                                مقبول
                            @elseif($sum >= 50)
                                ضعيف
                            @else
                                راسب
                            @endif
                        </td>
                    </tr>
                @endfor

            </tbody>
        </table>
    </div>

</div>
