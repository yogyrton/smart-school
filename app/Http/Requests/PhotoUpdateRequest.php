<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoUpdateRequest extends FormRequest
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
            'thumbnail' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'camp.required' => 'Поле "Лагерь" обязательно для заполнения',
            'thumbnail.image' => 'В поле "Фото" загрузите изображение формата: ',
        ];
    }
}
