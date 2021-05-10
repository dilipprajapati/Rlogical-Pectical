<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'first_name' => [
                'string',
                'min:3',
                'max:25',
                'required',
            ],
            'last_name' => [
                'string',
                'min:3',
                'max:25',
                'required',
            ],
            'company_id' => [
                'required',
                'integer',
            ],
            'email' => [
                'required',
                'unique:employees',
            ],
            'phone' => [
                'string',
                'min:7',
                'max:13',
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
