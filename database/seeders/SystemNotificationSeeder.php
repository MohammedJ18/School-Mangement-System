<?php

namespace Database\Seeders;

use App\Models\SystemNotification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemNotification::create([
            'title' => 'System Notification Title',
            'message' => 'اي طالب راسب يلتحق بشعبته القديمة لحين استقرار الاسماء وانتهاء التسجيل لطفا',
            'system_id' => 1,
        ]);
        SystemNotification::create([
            'title' => 'System Notification Title',
            'message' => 'يؤجل دوام المرحلة الاولى للاحد القادم لعدم اكتمال القوائم لغرض التوزيع على الشعب.. لطفا',
            'system_id' => 1,
        ]);
        SystemNotification::create([
            'title' => 'System Notification Title',
            'message' => 'الخريجين .. لطفا من جميع الكليات ضمان تواجد الثلاثة الاوائل او من ينوب عنهم من الموثوقين لديكم لاستلام الهدايا  الف الف الف مبرووووووك بالتوفيق ان شاء الله',
            'system_id' => 1,
        ]);
        SystemNotification::create([
            'title' => 'System Notification Title',
            'message' => 'تواجد طلبة المرحلة الاولى غدا الساعة 11:30 في قاعة A1 و قاعة A2 في مجمع القاعات لطفا ..',
            'system_id' => 2,
        ]);
        SystemNotification::create([
            'title' => 'System Notification Title',
            'message' => 'طلابنا الاعزاء .. جدول غدا عليه بعض التغيرات .. عذرونا بعض المواد بلا تدريسي للان نضطر للتغيير اجباريا',
            'system_id' => 2,
        ]);
        SystemNotification::create([
            'title' => 'System Notification Title',
            'message' => 'الجدول ستحصل فيه تغيرات على مواقع بعض المختبرات بسبب اغلاق مختبر قاعة 5 واعادته بواقع قاعة وليس مختبر',
            'system_id' => 2,
        ]);
    }
}
