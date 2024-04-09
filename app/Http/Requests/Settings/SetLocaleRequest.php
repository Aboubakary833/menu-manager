<?php

namespace App\Http\Requests\Settings;

use App\Enums\Lang;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class SetLocaleRequest extends FormRequest
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
            "__locale" => [
                "required",
                "string",
                "size:2",
                function(string $attribute, string $value, \Closure $callback) {
                    $langs = array_map(fn(string $k) => Str::lower($k), Lang::keys());
                    if (!in_array($value, $langs))
                        $callback(__("messages.settings.validation.locale"));
                }
            ]
        ];
    }
}
