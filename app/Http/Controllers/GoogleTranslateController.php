<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleTranslateController extends Controller
{
    public function change(Request $request): \Illuminate\Http\RedirectResponse
    {
        $lang = $request->query('lang', 'en');
        session()->put('locale', $lang);
        app()->setLocale($lang);

        return redirect()->back();
    }
}
