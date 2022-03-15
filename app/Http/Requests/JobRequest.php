<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fullname' => 'required',
            'name' => 'required',
            'dateOfBirth' => 'required',
            'nationality' => 'required',
            'nationalID' => 'required',
            'passport' => 'required',
            'residence' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'collegeAndUniversity' => 'required',
            'graduationEstimate' => 'required',
            'estimateOfMajor' => 'required',
            'dateOfBachelor' => 'required',
            'otherQualifications' => 'required',
            'degreeSpecialization' => 'required',
        ];
    }
}
