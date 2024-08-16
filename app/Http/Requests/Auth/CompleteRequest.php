<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\RequiredIf;

class CompleteRequest extends FormRequest
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
            'type' => 'bail|required|boolean',
            'enterprise' => [
                'bail',
                'nullable',
                new RequiredIf((int)$this->type),
                'string',
                'min:2',
                'max:20'
            ],
            'password' => [
                'bail',
                'nullable',
                new RequiredIf(!$this->user()->password),
                Password::min(8)
                ->max(16)
                ->letters()
                ->numbers()
                ->symbols()
            ]
        ];
    }
}
