<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class ConfirmIdentityRequest extends FormRequest
{
    protected array $fieldsNames = [];
    protected string $code = "";
    public function __construct(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], $content = null)
    {
        parent::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
        $this->fieldsNames = codeFieldsNames();
    }

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
        return array_combine(
            $this->fieldsNames,
            array_fill(
                0,
                count($this->fieldsNames),
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

    protected function passedValidation()
    {
        $code = implode(",", array_values($this->validated()));
        $validator = Validator::make(
            ["value" => $code],
            ["value" => "required|exists:codes,value"]
        );
        if (!$validator->fails())
        {
            throw (new $validator->getException())
                ->errorBag($this->errorBag)
                ->redirectTo($this->getRedirectUrl());
        }
        $this->code = $code;
    }

}
