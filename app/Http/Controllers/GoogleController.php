<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use  Illuminate\Support\Facades\DB;
use function Termwind\renderUsing;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
        $existUser = User::where('email', $user->getEmail())->first();
        if ($existUser) {
            auth()->login($existUser, true);
        } else {
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->email_verified_at = now();
            $newUser->role = 1;
            $newUser->google_id = $user->getId();
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->route('home');
    }
}
