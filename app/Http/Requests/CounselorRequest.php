<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounselorRequest extends FormRequest
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
            'name' => 'required',
            'thumbnail' => 'nullable|image',
            'camp' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "ФИО" должно быть заполнено',
        ];
    }
}