<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login()
    {
        return view('layouts.login');
    }

    public function register()
    {
        return view('layouts.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:12'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->level = 'admin';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();

        if($query){
            return redirect()->route('login')->with('success','Success registered. Try to login');
        }else{
            return back()->with('failed','failed');
        }

    }

    // For Login
    
    public function proses_login(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $kredensil = $request->only('username','password');

        if(Auth::attempt($kredensil)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->route('dashboard');
            }elseif ($user->level ==  'user') {
                return redirect()->intended('user');
            }
            return redirect()->intended('/');
        }

        return redirect('login')->with('fail','Username Password Salah. Coba Lagi');
    }


    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $user = User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
              
                $request->session()->put('LoggedUser', $user->id);
                return redirect()->route('dashboard')->with('success','Success login');

            }else{
                return back()->with('fail','Invalid Password');
            }
        }else{
            return back()->with('fail', 'No account found for this email');
        }
    }    

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }

    
}
