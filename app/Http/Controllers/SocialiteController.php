<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect to Google Login
     *
     * @return void
     */
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * This function will authenticate the user through their Google Account
     *
     * @return void
     */
    public function googleAuthentication()
    {

        try {
            $googleUser = Socialite::driver('google')->user();

            // $user = User::where('google_id', $googleUser->id)->first();
            $user = User::where('email', $googleUser->email)
                // Add attributes to determine allowed
                ->first();

            if ($user) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {

                return redirect()->route('login')->with('message', 'This account is not authorized to access this application');
            }
        } catch (Exception $e) {
            // return redirect()->route('login')->with('message', 'This account is not authorized to access this application');

            dd($e);
        }
    }

    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookAuthentication()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        if ($facebookUser) {
            $user = User::where('facebook_id', $facebookUser->id)->first();

            if ($user) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $facebookUser->name,
                    'email' => $facebookUser->email,
                    'facebook_id' => $facebookUser->id,
                    'password' => Hash::make('El3ctPa55w0rd')
                ]);


                if ($newUser) {
                    Auth::login($newUser);
                    return redirect()->route('dashboard');
                }
            }
        }


        dd($facebookUser);
    }
}
