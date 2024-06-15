<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentOfficeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'office_name' => 'required',
            'name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'country' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'image_path' => 'nullable',
            'status' => 'nullable'
        ];
    }
}
