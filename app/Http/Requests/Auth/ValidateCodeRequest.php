<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCodeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "__code_pin_1" => "required|integer|digits:1",
            "__code_pin_2" => "required|integer|digits:1",
            "__code_pin_3" => "required|integer|digits:1",
            "__code_pin_4" => "required|integer|digits:1",
            "__code_pin_5" => "required|integer|digits:1",
        ];
    }

    public function messages() : array
    {
        return [
            "required" => __("validation.custom_messages.required"),
            "digits" => __("validation.custom_messages.digits"),
        ];
    }
}
