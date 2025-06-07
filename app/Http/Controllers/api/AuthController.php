<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\core\Plantilla;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
   

    public function authenticate(Request $request)
    {
        // dd ($request->json);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {

            return response([
                'message' => 'Bad credentials'
            ], 401);
        }


        $token = $user->createToken('auth_token')->plainTextToken;

        // Get Plantilla 

        // Get Office based on appointment and  plantilla 

        // Get position based  on plantilla 

        $response = [
            'status' => 'success',
            'message' => 'Login successful',
            'token' => $token,
            'user' => $user,
            
            // 'email' => $request->email
        ];

        // Check if appointment exists 

        if ($user->appointment)
        {
            $appointment = $user->appointment;

            $plantilla = Plantilla::find($appointment->plantilla_id);
            $response['plantilla'] = $plantilla;
   
        }

        return response($response, 201);
        
    }

    public function test(Request $request) 
    {

        $response = [
            'status' => 'success',
            'message' => 'API Route success',
            'token' => $request->email,
            // 'user' => $user
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        Auth::logout();


        // auth()->user()->tokens()->delete();
        $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return [
            'message' => 'You have been logged out'
        ];

        // return redirect('/');
    }
}
