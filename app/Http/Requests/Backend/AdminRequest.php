<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:20',
            'email' => [
                'required',
                'email',
                Rule::unique('admins')->ignore($this->admin)
            ],
            'password' => $this->routeIs('dashboard.admins.store')
                ? 'required|min:8|confirmed'
                : 'sometimes|nullable|min:8|confirmed',
            'status' => 'required|boolean',
            'role' => 'required',
        ];
    }
}
