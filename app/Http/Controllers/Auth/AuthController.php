<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Auth\Login;
use App\Http\Requests\Auth\Register;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login(Login $request){
        // This line of code is checking whether user inputted an email or some other string – which then is interpreted as username.
        $field = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // This line of code is checking if remember me checkbox is checked or not and set true or false,
        $remember = (!empty($request->remember)) ? true : false;

        // Now we’re checking the credentials, but only the particular one we need – it comes from $field variable.
        // 
        if (Auth::attempt([$field => $request->login, 'password' => $request->password], $remember)) {
            $request->session()->regenerate();
            auth()->user()->update([
                'last_login_at' => Carbon::now()->toDateTimeString(),
                'last_login_ip' => $request->getClientIp(),
            ]);
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
