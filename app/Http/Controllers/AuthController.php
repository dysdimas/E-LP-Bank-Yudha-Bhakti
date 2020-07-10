<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        $title = 'Login Page';
        $data_opvideos = \App\OpvideosDpp::all();
        return view('auth.index', ['title' => $title, 'data_opvideos' => $data_opvideos]);
    }

    public function authentic(Request $request)
    {
        $this->validate(request(), [
            'nik' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('nik', 'password'))) {
            $data_session = User::where('nik', $request->nik)->first();
            if ($data_session) {
                Session::put('nik', $data_session->nik);
                Session::put('id', $data_session->id);
                Session::put('role', $data_session->role);
                Session::put('name', $data_session->name);
                Session::put('login', TRUE);
                return redirect('/admin');
            }
        }
        return redirect('/auth')->with('gagal', 'Opps !!! Mungkin nip & password kamu salah :)');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
