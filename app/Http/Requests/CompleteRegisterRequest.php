<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteRegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //alls ar rquired
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date|after:1900-01-01|before:today',
        ];
    }
}
