<?php

namespace Database\Seeders;

use App\Models\Block;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $upcomingEvents = [
            [
                'title_ar' => 'قسم التعليم الطبي',
                'title_en' => 'Medical Education Department',
                'description_ar' => 'الأستاذة أميمة حامد ، مديرة التعليم الطبي',
                'description_en' => 'Professor Omayma Hamed, Director of Medical Educat...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => Carbon::now()->addDays(20),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
            [
                'title_ar' => 'فريق المراجعيين يزور الكلية',
                'title_en' => 'NAQAAE audit team visited AFCM',
                'description_ar' => 'إستقبال كلية الطب بالقوات المسلحة فريق المراجعين م...',
                'description_en' => 'AFCM has received NAQAAE reviewer team visits both...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => Carbon::now()->addDays(20),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
            [
                'title_ar' => 'زيارة قطاع  خدمة المجتمع و تنمية البيئة  لمستشفي غ...',
                'title_en' => 'visit of Community service and environmental devel...',
                'description_ar' => 'مستشفي غمرة',
                'description_en' => 'Ghamra Hospital',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => Carbon::now()->addDays(20),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
            [
                'title_ar' => 'فريق المراجعيين يزور الكلية',
                'title_en' => 'NAQAAE audit team visited AFCM',
                'description_ar' => 'إستقبال كلية الطب بالقوات المسلحة فريق المراجعين م...',
                'description_en' => 'AFCM has received NAQAAE reviewer team visits both...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => Carbon::now()->addDays(20),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
        ];
        Block::insert($upcomingEvents);

        $events = [
            [
                'title_ar' => 'قسم التعليم الطبي',
                'title_en' => 'Medical Education Department',
                'description_ar' => 'الأستاذة أميمة حامد ، مديرة التعليم الطبي',
                'description_en' => 'Professor Omayma Hamed, Director of Medical Educat...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
            [
                'title_ar' => 'فريق المراجعيين يزور الكلية',
                'title_en' => 'NAQAAE audit team visited AFCM',
                'description_ar' => 'إستقبال كلية الطب بالقوات المسلحة فريق المراجعين م...',
                'description_en' => 'AFCM has received NAQAAE reviewer team visits both...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
            [
                'title_ar' => 'زيارة قطاع  خدمة المجتمع و تنمية البيئة  لمستشفي غ...',
                'title_en' => 'visit of Community service and environmental devel...',
                'description_ar' => 'مستشفي غمرة',
                'description_en' => 'Ghamra Hospital',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
            [
                'title_ar' => 'فريق المراجعيين يزور الكلية',
                'title_en' => 'NAQAAE audit team visited AFCM',
                'description_ar' => 'إستقبال كلية الطب بالقوات المسلحة فريق المراجعين م...',
                'description_en' => 'AFCM has received NAQAAE reviewer team visits both...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_EVENTS,
            ],
        ];

        Block::insert($events);
    }
}
