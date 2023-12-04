<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function LoginAuth(Request $request)
    {
        Session::flash('username', $request->Username);

        $request->validate([
            'Username' => 'required',
            'Password' => 'required'
        ], [
            'Username.required' => 'Username wajib diisi.',
            'Password.required' => 'Password wajib diisi.'
        ]);

        // echo 'alert(' . $request->Username . ');';
        // echo 'alert(' . $request->Password . ');';
        // $admins = Admin::where('username', $request->Username)->where('password',$request->Password)->where('status', '1')->first();
        // echo $admins->Nama;
        $info = [
            'username' => $request->get('Username'),
            'password' => $request->get('Password'),
        ];

        $admin = Admin::where('username', $info['username'])->first();

        if ($admin) {
            if ($admin->Password == $info['password']) {
                // Autentikasi berhasil
                Auth::guard('admin')->login($admin);

                //Menyimpan informasi login
                $request->session()->put('logged_in', $admin);

                return redirect(route('Dashboard.dashboard'))->with('success', 'Login Berhasil!');
            } else {
                return redirect(route('logins.index'))->with('error', 'Password Salah!');
            }
        } else {
            // Autentikasi gagal
            return redirect(route('logins.index'))->with('error', 'Username atau Password Salah!');
        }
    }

    public function LoginPengurusAction(Request $request)
    {
        $request->validate([
            'Nim' => 'required',
            'Password' => 'required',
        ], [
            'Nim.required' => 'Nim Wajib Diisi.',
            'Password.required' => 'Password Wajib Diisi.',
        ]);

        $info = [
            'nim' => $request->Nim,
            'password' => $request->Password,
        ];

        $pengurus = Pengurus::where('nim', $info['nim'])->first();

        if ($pengurus) {
            if ($pengurus->Password == $info['password']) {
                Auth::guard('pengurus')->login($pengurus);
                $request->session()->put('logged_in', $pengurus);
                return redirect(route('Dashboard.dashboard_pengurus'))->with('success', 'Berhasil Login!');
            } else {
                return redirect(route('auth.login_pengurus'))->with('error', 'Password Salah!');
            }
        } else {
            return redirect(route('auth.login_pengurus'))->with('error', 'Username atau Password Salah!');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('logins.index'))->with('successLogout', 'Berhasil Logout');
    }

    public function logoutPengurus()
    {
        Auth::guard('pengurus')->logout();
        return redirect(route('auth.login_pengurus'))->with('successLogout', 'Berhasil Logout');
    }

    public function LoginPengurus()
    {
        return view('auth.login_pengurus');
    }



    public function Pengurus()
    {
        return view('auth.create_pengurus');
    }

    public function CreatePengurus(Request $request)
    {
        $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'Organisasi' => 'required',
            'Divisi' => 'required',
            'Jabatan' => 'required',
            'Prodi' => 'required',
            'Password' => 'required',
        ], [
            'Nim.required' => 'Nim wajib diisi.',
            'Nama.required' => 'Nama wajib diisi.',
            'Organisasi.required' => 'Organisasi wajib diisi.',
            'Divisi.required' => 'Divisi wajib diisi.',
            'Jabatan.required' => 'Jabatan wajib diisi.',
            'Prodi.required' => 'Prodi wajib diisi.',
            'Password.required' => 'Password wajib diisi.'
        ]);

        $data = [
            'Nim' => $request->input('Nim'),
            'Nama' => $request->input('Nama'),
            'id_organisasi' => $request->input('Organisasi'),
            'id_divisi' => $request->input('Divisi'),
            'id_jabatan' => $request->input('Jabatan'),
            'id_prodi' => $request->input('Prodi'),
            'Password' => $request->input('Password'),
            'Status' => '1',
        ];

        Pengurus::create($data);

        return redirect(route('auth.login_pengurus'))->with('success', 'Added!');
    }

}

?>