<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePassword;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class PasswordController extends Controller
{
    public function update(ChangePassword $request) {
        $hashedPassword = auth()->user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if(!Hash::check($request->new_password, $hashedPassword)) {
                $user = User::findOrFail(auth()->user()->id);
                $user->password = Hash::make($request->new_password, ['rounds'=>12]);
                User::where('id', auth()->user()->id)->update(['password'=>$user->password]);
                return redirect('/')->with('success', __('Password updated successfully'));
            } else {
                return redirect()->back()->with('error', __('New password cannot be the same as current'));
            }
        }
    }
}
