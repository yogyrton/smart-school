<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoCreateRequest extends FormRequest
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
            'camp' => 'required',
            'thumbnail' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'camp.required' => 'Поле "Лагерь" обязательно для заполнения',
            'thumbnail.required' => 'Поле "Фото" обязательно для заполнения',
            'thumbnail.image' => 'В поле "Фото" загрузите изображение формата: ',
        ];
    }
}
