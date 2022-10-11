<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;


class AuthController extends Controller
{

    public function register(Request $request) {
        $request->validate([
            'firstname'=> 'required',
            'lastname'=>'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6|max:12'
        ]);

        $user = new User();
        $user->name = $request->firstname.' '.$request->lastname;
        $user->email = $request ->email;
        $user->password = Hash::make($request ->password);
        $res = $user -> save();

        if($res){
            return redirect('locate');
        } else {
            return back()->with('failed', 'something went wrong');
        }


    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $user = User::where('email', '=', $request->email) -> first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $request->session()->put('loginId', $user->id);

            return redirect()->intended('locate');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password'=> 'Incorrect password'
        ]);
    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function home(){
        $data = array();



        if (Session()->has('loginId')){

            $data = User::where('id', '=', Session()->get('loginId'))->first();
        }

      

        return view('home', compact('data', 'currentUserInfo'));
    }

}
