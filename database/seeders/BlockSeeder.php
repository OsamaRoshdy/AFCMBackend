<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            [
                'title_ar' => ' التعلم الإلكتروني',
                'title_en' => 'E-Learning Scholarship',
                'description_ar' => 'احصل على مكانك الآن بين أفضل الطلاب عبر الإنترنت',
                'description_en' => 'Get Your Place Now Among The Best Student Online',
                'image_name' => 'elearning.jpg',
                'status' => 1,
                'button_ar' => 'قم بالدخول',
                'button_en' => 'submit',
                'unique_name' => 'e-learning',
                'date' => today(),
                'type' => Block::TYPE_SECTIONS,
            ],
            [
                'title_ar' => 'احصل على أحدث الموارد',
                'title_en' => 'Get The Latest Resources',
                'description_ar' => 'تعلم كل تطور جديد في المجال الطبي',
                'description_en' => 'LEARN EVERY NEW DEVELOPMENT IN MEDICAL FIELD',
                'image_name' => '',
                'status' => 1,
                'button_ar' => 'اكتشف',
                'button_en' => 'discover',
                'unique_name' => 'resources_students',
                'sort' => 1,
                'date' => today(),
                'type' => Block::TYPE_SECTIONS,
            ],
            [
                'title_ar' => 'احصل على أحدث الموارد',
                'title_en' => 'Get The Latest Resources',
                'description_ar' => 'تحقق من أفضل الوجهات الطبية',
                'description_en' => 'LEARN EVERY NEW DEVELOPMENT IN MEDICAL FIELD',
                'image_name' => '',
                'status' => 1,
                'button_ar' => 'حسن',
                'button_en' => 'upgrade',
                'unique_name' => 'resources_staff',
                'date' => today(),
                'sort' => 2,
                'type' => Block::TYPE_SECTIONS,
            ],
            [
                'title_ar' => 'ACFM',
                'title_en' => 'ACFM',
                'description_ar' => 'الأقسام العلمية الطبية',
                'description_en' => 'Medical Scientific Sections',
                'image_name' => 'scientific.jpg',
                'status' => 1,
                'button_ar' => 'تصفح',
                'button_en' => 'browse',
                'unique_name' => 'medical_scientific_sections',
                'date' => today(),
                'sort' => 3,
                'type' => Block::TYPE_SECTIONS,
            ],
            [
                'title_ar' => 'الأحداث القادمة',
                'title_en' => 'Upcoming Events',
                'description_ar' => 'تعرف على كل شيء عن الأحداث والمؤتمرات القادمة والمزيد',
                'description_en' => 'Learn all about our comming events, conferences and more',
                'image_name' => '',
                'status' => 1,
                'button_ar' => '',
                'button_en' => '',
                'unique_name' => 'home_upcoming_events',
                'date' => today(),
                'sort' => 4,
                'type' => Block::TYPE_SECTIONS,
            ],
            [
                'title_ar' => 'إحصائيات ',
                'title_en' => 'AFCM Statistics',
                'description_ar' => 'نحن في AFCM نواصل سرد قصة نجاحنا بالأرقام',
                'description_en' => 'We at AFCM keep telling our success story in numbers',
                'image_name' => '',
                'status' => 1,
                'button_ar' => '',
                'button_en' => '',
                'unique_name' => 'statistics',
                'date' => today(),
                'sort' => 4,
                'type' => Block::TYPE_SECTIONS,
            ],
            [
                'title_ar' => 'آخر الأحداث والأخبار',
                'title_en' => 'Latest Events & News',
                'description_ar' => 'تعرف على جميع أخبار وبروتوكولات الاتحاد الآسيوي لكرة القدم وآخر الأحداث',
                'description_en' => 'Find Out All The News And Protocols Of AFCM And Latest Events',
                'image_name' => '',
                'status' => 1,
                'button_ar' => 'عرض المزيد',
                'button_en' => 'read more',
                'unique_name' => 'home_events_and_news',
                'date' => today(),
                'sort' => 7,
                'type' => Block::TYPE_SECTIONS,
            ],
            [
                'title_ar' => 'اشترك الآن واحصل على AFCM & Medical Development',
                'title_en' => 'Subscribe Now & Get All AFCM & Medical Development',
                'description_ar' => 'أدخل بريدك الإلكتروني للحصول على النشرة الإخبارية بجميع الأخبار والفرص',
                'description_en' => 'Insert your email to get newsletter with all the news and opportunities',
                'image_name' => '',
                'status' => 1,
                'button_ar' => 'اشترك',
                'button_en' => 'subscribe',
                'unique_name' => 'subscribe',
                'date' => today(),
                'sort' => 7,
                'type' => Block::TYPE_SECTIONS,
            ],

        ];
        foreach ($sections as $section) {
            Block::create($section);
        }

    }
}
