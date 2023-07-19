<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function handle(Request $request)
    {
        $languages = Language::all();
        $arrayLanguage = [];
        foreach ($languages as $language) {
            $arrayLanguage[] = $language->code;
        }
        if (in_array($request->input('locale'), $arrayLanguage)) {
            session()->put('locale', $request->input('locale'));
        }
        return back();
    }
}
