<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
//        $email = $request->email;
//        $password = $request->password;
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
//            ,'min:3','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
        ]);
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']]))
        {
            return Redirect::route('dashboard');
        }


        return Redirect::route('login')->withErrors([

            'loginError' => 'The provided credentials do not match our records.',

        ]);
    }
    public function addUser(Request $request)
    {
//        $name = $request->name;
//        $family = $request->family;
//        $user_name = $request->user_name;
//        $phone_number = $request->phone_number;
//        $email = $request->email;
//        $role = $request->role;
//        $password = $request->password;

//        $user = new \App\Models\User();

//        $user->role = $role;
//        $user->name = $name;
//        $user->family = $family;
//        $user->user_name = $user_name;


//        $user->save();
        $request["password"] = bcrypt($request["password"]);
        $user = User::create($request->all());
        if ($user){
            return 'ok';
        }else{
            return 'no';
        }

    }
}
