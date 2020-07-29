<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>'required|string|max:225',
            'lastname'=>'required|string|max:225',
            'email'=>'required',
            'phone'=>'required|min:8|max:8|integer',
            'password'=>'required|string|min:8',
            'password_confirm'=>'required|min:8|string',
            'identity'=>'sometimes|image|max:5000'

        ];
    }
}
