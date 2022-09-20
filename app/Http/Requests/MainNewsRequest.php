<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainNewsRequest extends FormRequest
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
                'title' => 'required|max:50',
                'text' => 'required|max:500',
                'page' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле "Заголовок" должно быть заполнено',
            'title.max' => 'Поле "Заголовок" должно содержать не более 50 символов',

            'text.required' => 'Поле "Текст" должно быть заполнено',
            'text.max' => 'Поле "Текст" должно содержать не более 500 символов',

            'page.required' => 'Выберите лагерь',
        ];
    }
}
