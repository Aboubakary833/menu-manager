<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
        $fieldsNames = [
            "__0x46i52s54",
            "__0x53e43o4Ed",
            "__0x54h49r44",
            "__0x46o55r54h",
            "__0x46i46t48",
        ];
        return array_combine(
            $fieldsNames,
            array_fill(
                0,
                count($fieldsNames),
                "required|integer|digits:1"
            )
        );
    }

    public function messages() : array
    {
        return [
            "required" => __("validation.custom_messages.required"),
            "digits" => __("validation.custom_messages.digits"),
        ];
    }

    protected function passedValidation(): void
    {
        $code = implode('', array_values($this->validated()));

        $validator = Validator::make(
            ["code" => $code],
            [
                "code" => [
                    "exists:codes,value",
                    function(string $attribute, string $value, \Closure $fails) {

                    }
                ]
            ],
            ["exists" => __("validation.custom_messages.exists.code")]
        );

        if ($validator->fails())
            throw new ValidationException($validator);

        $this->code = $code;
    }

    /**
     * Get the verification code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }

}
