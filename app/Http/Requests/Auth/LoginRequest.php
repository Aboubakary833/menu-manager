<?php

namespace App\Http\Requests\Auth;

use App\Traits\HasNotRateLimiting;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    use HasNotRateLimiting;

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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'bail|required|string|email',
            'password' => 'bail|required|string'
        ];
    }

    /**
     * @return void
     * @throws ValidationException
     */
    public function authenticate() : void
    {
        $this->ensureIsNotRateLimited();
        $credentials = $this->only(['email', 'password']);

        if (!auth()->attempt($credentials))
        {
            RateLimiter::hit($this->throttleKey());
            $this->session()->put('error', __('auth.failed'));
            throw (new ValidationException($this->validator));
        }

        RateLimiter::clear($this->throttleKey());
    }
}
