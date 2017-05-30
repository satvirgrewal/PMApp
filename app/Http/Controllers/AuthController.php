<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function getLogin()
    {
        return view('auth.login');
    }   //


    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6',
        ]);

        User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()
            ->route('index')
            ->withInfo('Your account has been created and you can now sign in');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $authStatus = Auth::attempt($request->only(['email', 'password']), $request->has('remember'));
        if (!$authStatus) {
            return redirect()->back()->with('info', 'Invalid Email or Password');
        }

        return redirect()->route('index')->with('info', 'You are now signed in');
    }

    public function logOut(){
    Auth::logout();
    return redirect()->route('index');

    }
}
