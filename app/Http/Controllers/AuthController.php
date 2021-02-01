<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'nullable'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            // return redirect()->route('user', $user);
            return view('user', [
                'user' => $user,
            ]);
        } else {
            echo 'Email tidak terdaftar';
        }
    }

    public function showRegister()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $user           = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $saved = $user->save();

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)
        // ]);

        // alert()->success('Sukses', 'Anda berhasil mendaftar');
        if ($saved) {
            echo 'Data Berhasil Tersimpan';
        } else {
            echo 'Data gagal etrsimpan';
        }
    }
}
