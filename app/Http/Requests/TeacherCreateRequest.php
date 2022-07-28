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
            'name' => 'required|max:200',
            'position' => 'nullable|max:200',
            'category' => 'nullable|max:200',
            'experience' => 'nullable|max:200',
            'thumbnail' => 'required|image|max:10000',
            'point' => 'required|integer|unique:teachers,point|min:1|max:200',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "ФИО" должно быть заполнено',
            'name.max' => 'Поле "ФИО" должно быть не более 200 символов',

            'position.max' => 'Поле "Должность " должно быть не более 200 символов',

            'category.max' => 'Поле "Категория " должно быть не более 200 символов',

            'experience.max' => 'Поле  "Стаж" должно быть не более 200 символов',

            'thumbnail.required' => 'Поле "Фото" должно быть заполнено',
            'thumbnail.image' => 'Поле "Фото" должно иметь форматы jpg, jpeg, png, bmp, gif, svg или webp',
            'thumbnail.max' => 'Поле "Фото" должно быть не больше 8 мб',

            'point.required' => 'Поле "Позиция показа" должно быть заполнено',
            'point.integer' => 'Поле "Позиция показа" должно быть числом',
            'point.unique' => 'Поле "Позиция показа" должно быть уникальным',
            'point.min' => 'Поле "Позиция показа" должно быть не менее 1',
            'point.max' => 'Поле "Позиция показа" должно быть не более 200',
        ];
    }
}
