<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentUpdateRequest extends FormRequest
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
            'path' => 'file|max:10000',
            'page' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле "название" обязательно для заполнения',
            'title.max' => 'В поле "название" не более 50 символов',

            'path.max' => 'Поле "Загрузить документ" должно быть не больше 8 мб',

            'page.required' => 'Поле "Выбрать позицию" обязательно для заполнения',
        ];
    }
}
