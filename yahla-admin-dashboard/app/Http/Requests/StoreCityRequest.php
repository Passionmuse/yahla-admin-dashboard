<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
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
            // 'name' => 'required',
            'cities' => 'required|array',
            'cities.0.*' => 'required',
            'cities.*.name' => 'required',
            'cities.*.zipcode' => 'required',
            'country_id' => 'required',
            'region_id' => 'required',
            'zipcode' => 'nullable',
            'status' => 'nullable',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'cities.required' => 'At lease one city and its zipcode is required.',
            'cities.*.zipcode' => 'Zipcode is required',
            'cities.*.name' => 'City name is required',
        ];
    }
}
