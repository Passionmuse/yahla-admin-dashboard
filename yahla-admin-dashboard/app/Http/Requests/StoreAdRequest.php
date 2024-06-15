<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdRequest extends FormRequest
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
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'service_type' => 'nullable',
            'payment_type' => 'nullable',
            'image_url' => 'nullable',
            'destination_url' => 'nullable',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'budget' => 'nullable',
            'status' => 'nullable',
        ];
    }
}
