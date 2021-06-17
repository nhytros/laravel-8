<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Auth\Login;
use App\Http\Requests\Auth\Register;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $field = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt([$field => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/')->with('success',__('Login successfull'));
        }
        return back()->withErrors([
            $field => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Register $request){
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password, ['rounds'=>12]);
        $user->save();
        return redirect()->route('auth.login')->with('success', __('User has been registered. Now you can login'));
    }

    public function logout(){
        $this->middleware('auth');
        //
    }
}
