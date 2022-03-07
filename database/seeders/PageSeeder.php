<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title_ar' => 'كلمة عميد الكلية',
                'title_en' => 'A Word From The Dean',
            ],

            [
                'title_ar' => 'لماذا نحن',
                'title_en' => 'Why AFCM?',
            ],

            [
                'title_ar' => 'الرؤية و الرسالة',
                'title_en' => 'Vision & Mission',
            ],
            [
                'title_ar' => 'التاريخ',
                'title_en' => 'History',
            ],
            [
                'title_ar' => 'حقائق و ارقام',
                'title_en' => 'Facts & Figures',
            ],
            [
                'title_ar' => 'المشاريع المستقبلية',
                'title_en' => 'Future Projects',
            ],
            [
                'title_ar' => 'الاسئلة الشائعة',
                'title_en' => 'FAQs',
            ],
            [
                'title_ar' => 'شروط القبول',
                'title_en' => 'Admission Requirements',
            ],
            [
                'title_ar' => 'كيفية التقديم',
                'title_en' => 'How to Apply',
            ],
            [
                'title_ar' => 'شروط القبول',
                'title_en' => 'Admission Requirements',
            ],
            [
                'title_ar' => 'كيفية التقديم',
                'title_en' => 'How to Apply',
            ],
            [
                'title_ar' => 'برنامج الخريجين',
                'title_en' => 'Undergraduate Programs',
            ],
            [
                'title_ar' => 'برنامج التدريب',
                'title_en' => 'Internship Programs',
            ],
            [
                'title_ar' => 'برنامج الدراسات العليا',
                'title_en' => 'Post Graduate Programs',
            ],
            [
                'title_ar' => 'برنامج بناء القدرات',
                'title_en' => 'Capacity Building Programs',
            ],
            [
                'title_ar' => 'الطلاب',
                'title_en' => 'Students',
            ],
            [
                'title_ar' => 'اعضاء هيئة التدريس',
                'title_en' => 'Staff',
            ],
            [
                'title_ar' => 'بروتوكولات التعاون الدولي',
                'title_en' => 'International Cooperation Protocols',
            ],
            [
                'title_ar' => 'بروتوكولات التعاون المحلي',
                'title_en' => 'National Cooperation Protocols',
            ],
        ];

        foreach ($data as $item) {
            Block::create([
                'title_ar' => $item['title_ar'],
                'title_en' => $item['title_en'],
                'slug_ar' => slug_ar($item['title_ar']),
                'slug_en' => str_slug($item['title_en']),
                'status' => 1,
                'created_at' => now(),
                'type' => Block::TYPE_PAGES,
            ]);
        }
    }
}
