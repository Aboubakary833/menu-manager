<?php

namespace App\Http\Controllers\Settings;

use App\Actions\Setting\UpdateUserLocale;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\SetLocaleRequest;

class SetLocaleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SetLocaleRequest $request)
    {
        $locale = $request->input('__locale');
        if ($request->user())
            (new UpdateUserLocale)->handle($request->user(), $locale);

        return back()->withCookie(cookie()->forever('__locale', $locale));
    }
}
