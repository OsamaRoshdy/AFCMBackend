<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\CategoryBlock;
use App\Models\MainPageBlock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $data = [
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
                'type' => Block::TYPE_NEWS,
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
                'type' => Block::TYPE_NEWS,
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
                'type' => Block::TYPE_NEWS,
            ],
            [
                'title_ar' => 'وقعت كلية الطب بالقوات المسلحة (AFCM) وجامعة ولاية...',
                'title_en' => 'Armed Forces College of Medicine (AFCM) and Michig...',
                'description_ar' => 'قيم في التاسع من يناير 2018 تحت رعاية اللواء أيمن ...',
                'description_en' => 'It was held on 9th of JAN 2018 under patronage of ...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
            ],
            [
                'title_ar' => 'الاعلان عن قبول دفعة جديدة',
                'title_en' => 'Announcing Of Acceptance of a new batch of high sc...',
                'description_ar' => 'الفريق أول محمد زكي القائد العام للقوات المسلحة وز...',
                'description_en' => 'General Mohamed Zaki, Commander-in-Chief of the Ar...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
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
                'type' => Block::TYPE_NEWS,
            ],
            [
                'title_ar' => 'وقعت كلية الطب بالقوات المسلحة (AFCM) وجامعة ولاية...',
                'title_en' => 'Armed Forces College of Medicine (AFCM) and Michig...',
                'description_ar' => 'قيم في التاسع من يناير 2018 تحت رعاية اللواء أيمن ...',
                'description_en' => 'It was held on 9th of JAN 2018 under patronage of ...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
            ],
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
                'type' => Block::TYPE_NEWS,
            ],
            [
                'title_ar' => 'وقعت كلية الطب بالقوات المسلحة (AFCM) وجامعة ولاية...',
                'title_en' => 'Armed Forces College of Medicine (AFCM) and Michig...',
                'description_ar' => 'قيم في التاسع من يناير 2018 تحت رعاية اللواء أيمن ...',
                'description_en' => 'It was held on 9th of JAN 2018 under patronage of ...',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
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
                'type' => Block::TYPE_NEWS,
            ],




            [
                'title_ar' => 'متطلبات القبول',
                'title_en' => 'Admission Requirements',
                'description_ar' => 'يجب على الطلاب الراغبين في الانضمام إلى الاتحاد الآسيوي لكرة القدم تلبية المتطلبات التالية. يجب أن يكونوا حاصلين على الجنسية المصرية ، وبالتالي يجب على والديهم وأجدادهم',
                'description_en' => 'Students who want to join the AFCM must meet the following requirements Must have Egyption Nationality and so their parents and grandparents',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
            ],
            [
                'title_ar' => 'فوائد AFCM',
                'title_en' => 'AFCM Benifits',
                'description_ar' => 'كونك طالبًا في AFCM ينتج عنه العديد من المزايا التي يدرسها الطلاب لمدة ست سنوات للحصول على درجة البكالوريوس',
                'description_en' => 'Being a studenr at the AFCM results in many advantages Cadets study for six years to get their bachelor degree',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
            ],
            [
                'title_ar' => 'التعليم AFCM',
                'title_en' => 'AFCM Education',
                'description_ar' => 'تلتزم الكلية بقواعد التقييم المُعلنة والمعتمدة',
                'description_en' => 'the college is committed to the declared and accredited code of assessment',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
            ],
            [
                'title_ar' => 'الدراسات العليا',
                'title_en' => 'Postgraduate Studies',
                'description_ar' => 'وتجري الكلية دراسات عليا لضباط القوات المسلحة وأطباء آخرين يقبلهم المجلس الأعلى للكلية',
                'description_en' => ' The College holds postgraduate studies for medical officers in the Armed forces and other doctors accepted by College Superme Council',
                'content_ar' => '',
                'content_en' => '',
                'image_name' => 'news.jpg',
                'status' => true,
                'date' => today(),
                'created_at' => now(),
                'type' => Block::TYPE_NEWS,
            ],



        ];
        Block::insert($data);

        $newData = [
            [
                'category_id' => 1,
                'block_id' => 16,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 16,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 16,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 16,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 17,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 17,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 17,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 17,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 19,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 19,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 19,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 19,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 20,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 20,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 20,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 20,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 21,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 21,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 21,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 21,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 22,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 22,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 22,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 22,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 23,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 23,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 23,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 23,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 24,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 24,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 24,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 24,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'category_id' => 1,
                'block_id' => 25,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 2,
                'block_id' => 25,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 3,
                'block_id' => 25,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 4,
                'block_id' => 25,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],










            [
                'category_id' => 5,
                'block_id' => 29,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 5,
                'block_id' => 30,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 5,
                'block_id' => 31,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'category_id' => 5,
                'block_id' => 32,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],


        ];


        CategoryBlock::insert($newData);

        $newData2 = [
            [
                'main_page_id' => 1,
                'block_id' => 16,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 16,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 16,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 17,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 17,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 17,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 18,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 18,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 18,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 19,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 19,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 19,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 20,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 20,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 20,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 21,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 21,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 21,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 22,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 22,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 22,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 23,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 23,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 23,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 24,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 24,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 24,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

            [
                'main_page_id' => 1,
                'block_id' => 25,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 2,
                'block_id' => 25,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],
            [
                'main_page_id' => 3,
                'block_id' => 25,
                'sort' => 1,
                'type' => Block::TYPE_NEWS,
                'date' => today(),
            ],

        ];

        MainPageBlock::insert($newData2);

    }
}
