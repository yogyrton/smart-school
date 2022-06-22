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
                'title' => 'required|max:20',
                'text' => 'required|max:80',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле "Заголовок" должно быть заполнено',
            'text.required' => 'Поле "Текст" должно быть заполнено',
            'title.max' => 'Поле "Заголовок" должно содержать не более 20 символов',
            'text.max' => 'Поле "Текст" должно содержать не более 80 символов',
        ];
    }
}
