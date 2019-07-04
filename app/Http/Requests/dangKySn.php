<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dangKySn extends FormRequest
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
            'user'=>'required|min:12',
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'user.required'=>'cc',
        ];
    }
}
