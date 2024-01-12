<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ValidateCodeRequest;
use Illuminate\Http\Request;

class ValidateCodeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ValidateCodeRequest $request)
    {
        dd(
            array_keys($request->validated())
        );
    }
}
