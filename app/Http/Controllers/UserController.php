<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{


    public function get_landing(){
        return view('login_register.landing');
    }
    
    public function get_register()
    {
        return view('login_register.register');
    }
    
    public function post_register(Request $request)
    {
        
        $validated = request()->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'zip' => 'required|alpha_dash',
            'street' => 'required|',
            'city' => 'required|alpha',

        ]);

        
        try { // Create user in database
            $user = User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'zip' => $request->input('zip'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                // role_id: 2 = user, 1 = admin 
                'role_id' => 2,
            ]);

            try { // Login user
                $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                //dd(Auth::user());
                return to_route('get-products', []);
            } else {
                return back()->withErrors('error', 'Die Benutzerdaten sind ungültig!');
            }
            } catch (Exception $e) {
                //return back()->with('error', $e->getMessage());
                Log::channel("register")->error("User: " . $request->email . "\Login failed\n" . $e->getMessage());
                return back()->withErrors('error', 'Sie wurden Registriert aber das login schlug fehl!');
            }

        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            Log::channel("register")->error("User: " . $request->email . "\nRegistration failed\n" . $e->getMessage());
            return to_route('landing');
        }



    }
    public function get_login()
    {
        return view('login_register.login');
    }
    public function post_login()
    {
        
        



    }

}
