<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
                'title' => 'required|max:40',
                'text' => 'required|max:150',
                'thumbnail' => 'required|image|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле "Заголовок" должно быть заполнено',
            'title.max' => 'Поле "Заголовок" должно содержать не более 40 символов',

            'text.required' => 'Поле "Текст" должно быть заполнено',
            'text.max' => 'Поле "Текст" должно содержать не более 150 символов',

            'thumbnail.required' => 'Поле "Фото" должно быть заполнено',
            'thumbnail.image' => 'Поле "Фото" должно иметь форматы jpg, jpeg, png, bmp, gif, svg или webp',
            'thumbnail.max' => 'Поле "Фото" должно быть не больше 8 мб',
        ];
    }
}
