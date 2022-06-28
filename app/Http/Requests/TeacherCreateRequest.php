<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherCreateRequest extends FormRequest
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
            'thumbnail' => 'required|image',
            'point' => 'required|integer|unique:teachers,point',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "ФИО" должно быть заполнено',
            'thumbnail.required' => 'Поле "Фото" должно быть заполнено',
            'point.required' => 'Поле "Позиция показа" должно быть заполнено',
            'point.integer' => 'Поле "Позиция показа" должно быть числом',
            'point.unique' => 'Поле "Позиция показа" должно быть уникальным',
        ];
    }
}
