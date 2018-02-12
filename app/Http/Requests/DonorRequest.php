<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonorRequest extends FormRequest
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
            //
            'name' => 'required',
            'blood_group' => 'required',
            'email' => 'required',
            'phone' => 'required|integer',
            'address' => 'required',
            'weight' => 'required|integer',
            'age' => 'required|integer',
            'gender' => 'required',
        ];
    }
}
