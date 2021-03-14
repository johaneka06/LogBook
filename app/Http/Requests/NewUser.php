<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NewUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8',
            'confirm' => 'required|same:password'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'email' => 'Email Address',
            'password' => 'Password',
            'confirm' => 'Confirmation Password'
        ];
    }
}
