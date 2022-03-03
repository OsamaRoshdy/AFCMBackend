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
                'title_ar' => 'لمحة سريعة  ',
                'title_en' => 'AFCM In Glance',
                'content_ar' => '<p>دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات حتى الحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس</p>',
                'content_en' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
                'image_name' => '',
                'status' => 1,
                'button_ar' => '',
                'button_en' => '',
                'unique_name' => 'glance',
                'date' => today(),
                'sort' => 5,
                'type' => Block::TYPE_SECTIONS,
            ],

            [
                'title_ar' => 'لماذا نحن',
                'title_en' => 'Why Join AFCM ?	',
                'content_ar' => '<p>بدء الطالب في نتائج AFCM في العديد من المزايا</p>

<p>دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات حتى الحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس دراسة لمدة ست سنوات للحصول على درجة البكالوريوس</p>',
                'content_en' => '<p>Begin a student at the AFCM results in many advantages</p>

<p>&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree&nbsp;Study for six years to get the bachelore degree</p>',
                'image_name' => '',
                'status' => 1,
                'button_ar' => '',
                'button_en' => '',
                'unique_name' => 'why_afcm',
                'date' => today(),
                'sort' => 6,
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
