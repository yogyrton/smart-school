<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
            'blr_1_4' => 'required|integer|min:0|max:10000',
            'blr_5_11' => 'required|integer|min:0|max:10000',
            'blr_gl' => 'required|integer|min:0|max:10000',
            'blr_dr' => 'required|integer|min:0|max:10000',
            'rus_1_4_rus' => 'required|integer|min:0|max:10000',
            'rus_5_8_rus' => 'required|integer|min:0|max:10000',
            'rus_9_11_rus' => 'required|integer|min:0|max:10000',
            'rus_1_4_blr' => 'required|integer|min:0|max:10000',
            'rus_5_8_blr' => 'required|integer|min:0|max:10000',
            'rus_9_11_blr' => 'required|integer|min:0|max:10000',
            'onl_1_4_rus' => 'required|integer|min:0|max:10000',
            'onl_5_8_rus' => 'required|integer|min:0|max:10000',
            'onl_9_11_rus' => 'required|integer|min:0|max:10000',
            'onl_1_4_blr' => 'required|integer|min:0|max:10000',
            'onl_5_8_blr' => 'required|integer|min:0|max:10000',
            'onl_9_11_blr' => 'required|integer|min:0|max:10000',
            'geo' => 'required|integer|min:0|max:10000',
        ];
    }
}
