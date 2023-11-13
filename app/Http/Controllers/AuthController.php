<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('loginadmin');
    }

    public function do_login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('pilpra');
        } else {
            return redirect()->back();
        }
    }


    public function logindewan()
    {
        return view('logindewan');
    }

    public function do_logindewanambalan(Request $request)
    {
        $credentials = $request->validate([
            'nisn' => ['required'],
            'password' => ['required'],
        ]);

        $nisn = Riwayat::select('nisn')->where('nisn', $request->nisn)->value('nisn');
        if($nisn == $request->nisn){
            return redirect()->back();
        }else{
            if(Auth::guard('dewanambalan')->attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('pilihpradana');
            }else{
                return redirect()->back();
            }
        }

        // $nisn = Riwayat::select('nisn')->where('nisn', $request->nisn)->value('nisn');
        // if($nisn == $request->nisn){
        //     return redirect()->back();
        // }else{p
        //     if(Auth::guard('dewanambalan')->attempt($credentials)){
        //         $request->session()->regenerate();
        //         return redirect()->intended('pilihpradana');
        //     }else{
        //         return redirect()->back();
        //     }
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function logout_dewan(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('logindewan');
    }

}
