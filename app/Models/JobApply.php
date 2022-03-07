<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;

    protected $fillable = ['block_id','fullname', 'name', 'dateOfBirth', 'nationality', 'nationalID', 'passport', 'residence', 'residence',

                            'phone', 'email', 'collegeAndUniversity', 'graduationEstimate', 'estimateOfMajor', 'dateOfBachelor', 'otherQualifications', 'degreeSpecialization'
    ];

    public function job()
    {
        return $this->belongsTo(Block::class, 'block_id');
    }
}
