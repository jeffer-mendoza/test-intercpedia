<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required|max:255|min:2|unique:companies',
            'email' => 'email|max:255|min:4|unique:companies',
            'website' => 'max:255|min:4|url',
            'logo' => 'file|mimes:jpeg,svg,png|max:2048|dimensions:min_width=100,min_height=100'
        ];
    }
}
