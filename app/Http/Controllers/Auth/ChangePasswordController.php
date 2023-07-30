<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    public function showLayoutChangePassword(){
        return view("auth.change-password");
    }
    public function changePassword(Request $request){
        $request->validate([
            "password" =>['required','string','confirmed'],
        ]);
        $user = Auth::user();

        if(!Hash::check($request->input("current_password"),$user->password)){
            throw ValidationException::withMessages([
                'current_password' => __('Mật khẩu hiện chưa đúng'),
            ]);
        }

        $user->password = Hash::make($request->input("password"));
        $user->save();
        Auth::logoutOtherDevices($request->input('password'));

        return redirect()->route('user.index')->with('status', __('Your password has been changed.'));
    }
}
