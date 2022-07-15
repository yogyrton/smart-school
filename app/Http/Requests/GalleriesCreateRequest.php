<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleriesCreateRequest extends FormRequest
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
            'thumbnail' => 'required|image|max:10000'
        ];
    }

    public function messages()
    {
        return [
            'thumbnail.required' => 'Поле "Фото" обязательно для заполнения',
            'thumbnail.image' => 'Поле "Фото" должно иметь форматы jpg, jpeg, png, bmp, gif, svg или webp',
            'thumbnail.max' => 'Поле "Фото" должно быть не больше 8 мб',
        ];
    }
}
