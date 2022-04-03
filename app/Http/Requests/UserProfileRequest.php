<?php

namespace App\Http\Requests;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'last_name' => 'required',
            'phone' => ['required', 'string',  app(Phone::class)],
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'age' => 'required|numeric|min:0',
            'sex' => 'required',
            'birthday' => 'required|date',
            'root' => 'required',
            'stay' => 'required|numeric',
        ];
    }
}
