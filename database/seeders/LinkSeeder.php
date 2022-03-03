<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 3 ; $i++) {
            $link = Link::create(
                [
                    'menu_link_id' => 1,
                    'block_id' => null,
                    'link_id' => null,
                    'name_ar' => 'Fake',
                    'name_en' => 'Fake',
                    'route' => '#',
                    'sort' => 1,
                    'type' => 1,
                ]
            );
            $link->delete();
        }
        $data = [
//          Start Parent Links
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'من نحن',
                'name_en' => 'About Us',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'القبول',
                'name_en' => 'ADMISSION',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'البرامج الأكاديمية',
                'name_en' => 'Academic Programs',
                'route' => '#',
                'sort' => 3,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'الأبحاث',
                'name_en' => 'Researches',
                'route' => '#',
                'sort' => 4,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'الشراكات',
                'name_en' => 'PartnerShip',
                'route' => '#',
                'sort' => 5,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'أخبار من الدرجة الأولى',
                'name_en' => 'Top Notch',
                'route' => '#',
                'sort' => 6,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'المركز الاعلامي',
                'name_en' => 'Media Center',
                'route' => '#',
                'sort' => 7,
                'type' => 1,
            ],
//          End Parent links
//_________________________________
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 4,
                'name_ar' => 'كلمة عميد الكلية',
                'name_en' => 'A Word From The Dean',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 4,
                'name_ar' => 'لماذا نحن',
                'name_en' => 'Why AFCM?',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 4,
                'name_ar' => 'الرؤية و الرسالة',
                'name_en' => 'Vision & Mission',
                'route' => '#',
                'sort' => 3,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 4,
                'name_ar' => 'التاريخ',
                'name_en' => 'History',
                'route' => '#',
                'sort' => 4,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 4,
                'name_ar' => 'حقائق و ارقام',
                'name_en' => 'Facts & Figures',
                'route' => '#',
                'sort' => 5,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 4,
                'name_ar' => 'المشاريع المستقبلية',
                'name_en' => 'Future Projects',
                'route' => '#',
                'sort' => 6,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 4,
                'name_ar' => 'الاسئلة الشائعة',
                'name_en' => 'FAQs',
                'route' => '#',
                'sort' => 7,
                'type' => 1,
            ],
//_________________________________
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 5,
                'name_ar' => 'المرحلة الجامعية',
                'name_en' => 'Undergraduates',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 5,
                'name_ar' => 'المرحلة العليا',
                'name_en' => 'Postgraduates',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
//_________________________________
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 18,
                'name_ar' => 'شروط القبول',
                'name_en' => 'Admission Requirements',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 18,
                'name_ar' => 'كيفية التقديم',
                'name_en' => 'How to Apply',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 19,
                'name_ar' => 'شروط القبول',
                'name_en' => 'Admission Requirements',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 19,
                'name_ar' => 'كيفية التقديم',
                'name_en' => 'How to Apply',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
//__________________________________
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 6,
                'name_ar' => 'برنامج الخريجين',
                'name_en' => 'Undergraduate Programs',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 6,
                'name_ar' => 'برنامج التدريب',
                'name_en' => 'Internship Programs',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 6,
                'name_ar' => 'برنامج الدراسات العليا',
                'name_en' => 'Post Graduate Programs',
                'route' => '#',
                'sort' => 3,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 6,
                'name_ar' => 'برنامج بناء القدرات',
                'name_en' => 'Capacity Building Programs',
                'route' => '#',
                'sort' => 4,
                'type' => 1,
            ],
//___________________________________
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 7,
                'name_ar' => 'الطلاب',
                'name_en' => 'Students',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 7,
                'name_ar' => 'اعضاء هيئة التدريس',
                'name_en' => 'Staff',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
//__________________________________
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 8,
                'name_ar' => 'بروتوكولات التعاون الدولي',
                'name_en' => 'International Cooperation Protocols',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 8,
                'name_ar' => 'بروتوكولات التعاون المحلي',
                'name_en' => 'National Cooperation Protocols',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
//___________________________________
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 10,
                'name_ar' => 'الأخبار و الفاعليات',
                'name_en' => 'News & Events',
                'route' => '#',
                'sort' => 1,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 10,
                'name_ar' => 'مجلة الكلية',
                'name_en' => 'College Magazine',
                'route' => '#',
                'sort' => 2,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 10,
                'name_ar' => 'الاخبار الصحفية',
                'name_en' => 'Press Releases',
                'route' => '#',
                'sort' => 3,
                'type' => 1,
            ],
            [
                'menu_link_id' => 1,
                'block_id' => null,
                'link_id' => 10,
                'name_ar' => 'معرض الصور و الفيديو',
                'name_en' => 'Photo & Video Gallery',
                'route' => '#',
                'sort' => 4,
                'type' => 1,
            ],
        ];


        Link::insert($data);

    }
}
