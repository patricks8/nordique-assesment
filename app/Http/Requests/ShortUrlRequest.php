<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShortUrlRequest extends FormRequest
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
            'destination' => [
                'required',
                'url',
            ]
        ];
    }

    /**
     * Get the attributes
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'destination' => __('Destination'),
        ];
    }
}
