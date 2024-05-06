<?php

namespace App\Http\Requests\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ConfirmIdentityRequest extends FormRequest
{
    protected string $code = "";

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
            "__confirm_code" => "required|size:5|exists:codes,value"
        ];
    }

    public function messages() : array
    {
        return [
            "exists" => __("validation.custom_messages.exists.code.invalid"),
            "size" => __("validation.custom_messages.exists.code.size", ["size" => 5])
        ];
    }

}
