<?php

namespace Database\Seeders;

use App\Models\FAQ;
use App\Models\FAQMainPage;
use App\Models\MainPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i=1;$i <= 6;$i++) {
            $data []= [
                'question_ar' => 'ما هي الشروط والمعايير الأساسية للالتحاق بالكلية؟',
                'question_en' => ' What are the conditions and basic standard need to join the college ?',
                'answer_ar' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف من استخدام لوريم إيبسوم هو أنه يحتوي على توزيع طبيعي -إلى حد ما- للأحرف ، بدلاً من استخدام "هنا يوجد محتوى نصي ، هنا يوجد محتوى نصي" ، مما يجعلها تبدو وكأنها إنجليزية قابلة للقراءة. العديد من حزم النشر المكتبي ومحرري صفحات الويب',
                'answer_en' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors",
                'sort' => $i,
                'status' => 1,
                'created_at' => now(),
            ];
        }


        FAQ::insert($data);

        $faqs = FAQ::all();
        $mainPages = MainPage::all();

        foreach ($mainPages as $mainPage) {
            if ($mainPage !== 4) {
                foreach ($faqs as $faq) {
                    FAQMainPage::create([
                        'faq_id' => $faq->id,
                        'main_page_id' => $mainPage->id,
                    ]);
                }
            }
        }
    }
}
