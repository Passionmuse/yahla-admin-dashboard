<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServerRequest extends FormRequest
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
            'address' => 'required',
            'port' => 'required|integer',
            'username' => 'required',
            'password' => 'required',
            'file_limit' => 'nullable|integer',
            'http_link' => 'nullable',
            'country' => 'nullable',
            'status' => 'nullable'
        ];
    }
}
