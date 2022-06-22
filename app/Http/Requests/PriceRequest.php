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
            'blr_1_4' => 'required|integer',
            'blr_5_11' => 'required|integer',
            'blr_gl' => 'required|integer',
            'blr_dr' => 'required|integer',
            'rus_1_4_rus' => 'required|integer',
            'rus_5_8_rus' => 'required|integer',
            'rus_9_11_rus' => 'required|integer',
            'rus_1_4_blr' => 'required|integer',
            'rus_5_8_blr' => 'required|integer',
            'rus_9_11_blr' => 'required|integer',
            'onl_1_4_rus' => 'required|integer',
            'onl_5_8_rus' => 'required|integer',
            'onl_9_11_rus' => 'required|integer',
            'onl_1_4_blr' => 'required|integer',
            'onl_5_8_blr' => 'required|integer',
            'onl_9_11_blr' => 'required|integer',
            'geo' => 'required|integer',
        ];
    }
}
