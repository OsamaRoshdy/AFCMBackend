<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;


    protected $fillable = ['question_ar', 'question_en','answer_ar','answer_en','sort', 'status'];

    protected $appends = ['question', 'answer'];

    public function getQuestionAttribute()
    {
        return app()->getLocale() === 'en' ? $this->question_en : $this->question_ar;
    }
    public function getAnswerAttribute()
    {
        return app()->getLocale() === 'en' ? $this->answer_en : $this->answer_ar;
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function mainPages()
    {
        return $this->belongsToMany(MainPage::class, 'f_a_q_main_pages', 'faq_id');
    }


}
