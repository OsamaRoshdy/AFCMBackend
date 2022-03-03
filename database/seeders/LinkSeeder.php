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
                'created_at' => now()
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
                'created_at' => now()

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
                'created_at' => now()

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
                'created_at' => now()

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
                'created_at' => now()

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
                'created_at' => now()

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
                'created_at' => now()

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
                'created_at' => now()

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
                'created_at' => now()

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
                'created_at' => now()

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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
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
'created_at' => now()
            ],




            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'كيف تنضم',
                'name_en' => 'How To Join',
                'route' => '#',
                'sort' => 1,
                'type' => Link::TYPE_INTERNAL,
                'created_at' => now()
            ],
            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'الأخبار و الأحداث',
                'name_en' => 'News & Events',
                'route' => '#',
                'sort' => 2,
                'type' => Link::TYPE_INTERNAL,
                'created_at' => now()
            ],
            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'أخبار طبية',
                'name_en' => 'Medical News',
                'route' => '#',
                'sort' => 3,
                'type' => Link::TYPE_INTERNAL,
                'created_at' => now()
            ],
            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'منشورات AFCM',
                'name_en' => 'AFCM Publications',
                'route' => '#',
                'sort' => 4,
                'type' => Link::TYPE_INTERNAL,
                'created_at' => now()
            ],
            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => null,
                'name_ar' => 'الوصول إلى الخدمات الذاتية',
                'name_en' => 'Self Services Access',
                'route' => '#',
                'sort' => 5,
                'type' => Link::TYPE_INTERNAL,
                'created_at' => now()
            ],



            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => 40,
                'name_ar' => 'الوصول الى بريد AFCM',
                'name_en' => 'Access AFCM Mail',
                'route' => 'https://mail.afcm.edu.eg/interface/root',
                'sort' => 1,
                'type' => Link::TYPE_EXTERNAL,
                'created_at' => now()
            ],

            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => 40,
                'name_ar' => 'الوصول الى SIS',
                'name_en' => 'Access SIS',
                'route' => 'https://xess.afcm.edu.eg/StudentSelfService',
                'sort' => 2,
                'type' => Link::TYPE_EXTERNAL,
                'created_at' => now()
            ],

            [
                'menu_link_id' => 3,
                'block_id' => null,
                'link_id' => 40,
                'name_ar' => 'الوصول الى LMS',
                'name_en' => 'Access LMS',
                'route' => 'https://afcm.brightspace/d2l/login',
                'sort' => 3,
                'type' => Link::TYPE_EXTERNAL,
                'created_at' => now()
            ],

        ];
//-------------------------------------
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => null,
            'name_ar' => 'الطلاب الجدد',
            'name_en' => 'New Students',
            'route' => '#',
            'sort' => 1,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => null,
            'name_ar' => 'الأخبار و الأحداث',
            'name_en' => 'News & Events',
            'route' => '#',
            'sort' => 2,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => null,
            'name_ar' => 'حياة الحرم الجامعي',
            'name_en' => 'AFCM Campus Life',
            'route' => '#',
            'sort' => 3,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => null,
            'name_ar' => 'الشؤون الأكاديمية',
            'name_en' => 'Academic Matters',
            'route' => '#',
            'sort' => 4,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => null,
            'name_ar' => 'الموارد',
            'name_en' => 'Resources',
            'route' => '#',
            'sort' => 5,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => null,
            'name_ar' => 'الحياة الذاتية للطلاب',
            'name_en' => 'Self Services Access',
            'route' => '#',
            'sort' => 6,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
//-------------------------------------
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 44,
            'name_ar' => 'قبل وصولك',
            'name_en' => 'Before You Arrive',
            'route' => '#',
            'sort' => 1,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 44,
            'name_ar' => 'اسابيعك الأولي',
            'name_en' => 'Your First Weeks',
            'route' => '#',
            'sort' => 2,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 44,
            'name_ar' => 'كلمة الخريجين',
            'name_en' => 'Graduate Speech',
            'route' => '#',
            'sort' =>3,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
//-------------------------------------
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 46,
            'name_ar' => 'التقييم',
            'name_en' => 'Accommodation',
            'route' => '#',
            'sort' =>1,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 46,
            'name_ar' => 'تسهيلات اكاديمية',
            'name_en' => 'Academic Facilities',
            'route' => '#',
            'sort' =>2,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 46,
            'name_ar' => 'تسهيلات اخري',
            'name_en' => 'Other Facilities',
            'route' => '#',
            'sort' =>3,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 46,
            'name_ar' => 'خدمات تقنية فرع النظم',
            'name_en' => 'It Services',
            'route' => '#',
            'sort' =>4,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 46,
            'name_ar' => 'الانشطة العلمية',
            'name_en' => 'Scientific Activites',
            'route' => '#',
            'sort' =>5,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 46,
            'name_ar' => 'الانشطة الرياضية',
            'name_en' => 'Sports Activites',
            'route' => '#',
            'sort' =>6,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 46,
            'name_ar' => 'الانشطة الفنية',
            'name_en' => 'Artistic Activites',
            'route' => '#',
            'sort' =>7,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
//-------------------------------------
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 47,
            'name_ar' => 'ارشاد الطلاب',
            'name_en' => 'Student Guidance',
            'route' => '#',
            'sort' =>1,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 47,
            'name_ar' => 'نظام التقييم',
            'name_en' => 'Assessment System',
            'route' => '#',
            'sort' =>2,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
//-------------------------------------
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 60,
            'name_ar' => 'المرشد التعليمي',
            'name_en' => 'Study Guidance',
            'route' => '#',
            'sort' =>1,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 60,
            'name_ar' => 'المرشد الاكاديمي',
            'name_en' => 'Academic Counseling',
            'route' => '#',
            'sort' =>2,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 60,
            'name_ar' => 'المرشد الوظيفي',
            'name_en' => 'Career Counseling',
            'route' => '#',
            'sort' =>3,
            'type' => Link::TYPE_INTERNAL,
            'created_at' => now()
        ];

//-------------------------------------
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 48,
            'name_ar' => 'بنك المعرفة المصري',
            'name_en' => 'EKB',
            'route' => 'https://www.ekb.eg/',
            'sort' =>1,
            'type' => Link::TYPE_EXTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 48,
            'name_ar' => 'Q-Bank',
            'name_en' => 'Q-Bank',
            'route' => 'https://www.canadaqbank.com/',
            'sort' =>2,
            'type' => Link::TYPE_EXTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 48,
            'name_ar' => 'المكتبة الالكترونية',
            'name_en' => 'E-Library',
            'route' => 'http://medlib.mod.gov.eg/',
            'sort' =>3,
            'type' => Link::TYPE_EXTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 2,
            'block_id' => null,
            'link_id' => 48,
            'name_ar' => 'الوصول الي موقع أكادمية',
            'name_en' => 'Incision Academy Access',
            'route' => 'https://academy.incision.care/',
            'sort' =>4,
            'type' => Link::TYPE_EXTERNAL,
            'created_at' => now()
        ];

//-------------------------------------
        $data[] = [
            'menu_link_id' => 3,
            'block_id' => null,
            'link_id' => 49,
            'name_ar' => 'الوصول الى بريد AFCM',
            'name_en' => 'Access AFCM Mail',
            'route' => 'https://mail.afcm.edu.eg/interface/root',
            'sort' => 1,
            'type' => Link::TYPE_EXTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 3,
            'block_id' => null,
            'link_id' => 49,
            'name_ar' => 'الوصول الى SIS',
            'name_en' => 'Access SIS',
            'route' => 'https://xess.afcm.edu.eg/StudentSelfService',
            'sort' => 2,
            'type' => Link::TYPE_EXTERNAL,
            'created_at' => now()
        ];
        $data[] = [
            'menu_link_id' => 3,
            'block_id' => null,
            'link_id' => 49,
            'name_ar' => 'الوصول الى LMS',
            'name_en' => 'Access LMS',
            'route' => 'https://afcm.brightspace/d2l/login',
            'sort' => 3,
            'type' => Link::TYPE_EXTERNAL,
            'created_at' => now()
        ];

        Link::insert($data);

    }
}
