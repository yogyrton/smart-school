<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacheUpdateRequest extends FormRequest
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
            'position' => 'nullable',
            'category' => 'nullable',
            'experience' => 'nullable',
            'thumbnail' => 'nullable|image',
            'point' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "ФИО" должно быть заполнено',
            'point.required' => 'Поле "Позиция показа" должно быть заполнено',
            'point.integer' => 'Поле "Позиция показа" должно быть числом',

        ];
    }
}
