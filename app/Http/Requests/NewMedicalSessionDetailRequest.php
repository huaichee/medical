<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewMedicalSessionDetailRequest extends FormRequest
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
            'body_position_id' => 'required',
            'note' => 'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'body_position_id.required' => 'Body position is required',
        ];
    }
}
