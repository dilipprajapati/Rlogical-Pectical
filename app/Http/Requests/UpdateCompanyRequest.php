<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
            'name' => [
                'string',
                'min:3',
                'max:25',
                'required',
            ],
            'email' => [
                'required',
                'unique:companies,email,' . request()->route('company')->id,
            ],
            'website' => [
                'string',
                'min:5',
                'max:100',
                'nullable',
            ],
            'status' => [
                'required',
            ],
    }
}
