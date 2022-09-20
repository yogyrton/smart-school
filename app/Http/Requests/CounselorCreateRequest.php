<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounselorCreateRequest extends FormRequest
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
            'thumbnail' => 'required|image|max:10000',
            'camp' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "ФИО" должно быть заполнено',
            'name.max' => 'Поле "ФИО" должно быть не более 200 символов',

            'thumbnail.required' => 'Поле "Фото" должно быть заполнено',
            'thumbnail.image' => 'Поле "Фото" должно иметь форматы jpg, jpeg, png, bmp, gif, svg или webp',
            'thumbnail.max' => 'Поле "Фото" должно быть не больше 8 мб',

            'camp.required' => 'Поле "Лагерь" должно быть заполнено',
        ];
    }
}
