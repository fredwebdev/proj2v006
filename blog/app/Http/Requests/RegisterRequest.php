<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            //
'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'passwordConfirm' => 'required|same:password',
        ];
    }

    /**
     * @return array
     */
    public function messages(){
        return [
            'email.required' => 'Adresse e-mail obligatoire.',
            'email.email' => 'Adresse e-mail invalide.',
            'password.required' => 'Mot de passe obligatoire.',
            'passwordConfirm.required' => 'Confirmation du mot de passe obligatoire.',
        ];

    }
}
