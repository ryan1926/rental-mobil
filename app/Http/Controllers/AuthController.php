<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
>>>>>>> ac37d0b2 (pertemuan-12)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function post(Request $request)
    {
        // dd(request()->all());
        $cre = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($cre)) {
            session()->regenerate();
<<<<<<< HEAD
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('warning', 'Username atau password anda salah!');
        }
    }

    public function register()
    {
        return view('auth.register');
=======
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->with('warning', 'Username Atau Password Anda Salah');
        }
    }


    public function register()
    {
        $role = Role::whereNotIn('kode_role', ['SAD'])->get();
        return view('auth.register', [
            'roles' => $role
        ]);

        
    }

    public function store(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $user->roles()->attach($request->role_id);

        return redirect()->route('auth.login')->with('success', 'akun anda berhasil diregistrasi, coba login!');

>>>>>>> ac37d0b2 (pertemuan-12)
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> ac37d0b2 (pertemuan-12)
