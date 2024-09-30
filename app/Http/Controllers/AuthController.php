<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(request $request)
    {
        return view('login1');


    }

    public function login_now(request $request)
    {

        $ck = User::where('email', $request->email)->first() ?? null;
        if ($ck == null) {
            return view('register1');
        }

        if ($ck->status == 9) {
            return redirect('login1')->with('error', "You have been banned");
        }

        if ($ck->status == 2) {
            $data['email'] = $request->email;
            return view('login2', $data);
        }

    }

    public function login_user(request $request)
    {

        $credentials = request(['email', 'password']);
        if (!auth()->attempt($credentials)) {
            return redirect('login1')->with('error', "Email or password is incorrect");
        }

        $username = Auth::user()->username;
        return redirect('home')->with('message', "Welcome back, $username");


    }

    public function logout(request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}
