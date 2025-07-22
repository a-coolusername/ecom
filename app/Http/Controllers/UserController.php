<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function account(){
    $user = Auth::user();
    return view('account', compact('user'));
    }
    public function changePassword(Request $request)
    {
        $user = Auth::user();
        if (Hash::check($request->input('old-password'), $user->password) && $request->input('new-password')
            === $request->input('confirm-new-password')) {
            $user->password = Hash::make($request->input('new-password'));
            $user->save();
            return redirect('/account')->with('success', 'Password Changed');
        } elseif (Hash::make($request->input('old-password')) !== $user->password
            && $request->input('new-password') === $request->input('confirm-new-password')) {
            return redirect('/account')->with('error-old', 'Old password wrong');
        }
        else{
            return redirect('/account')->with('error-other', 'Something went wrong');
        }
    }
}
