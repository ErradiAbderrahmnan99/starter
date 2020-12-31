<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }

    public function callback($service){
        $user = Socialite::with($service)->stateless()->user();
        return response()->json($user);
    }
}
