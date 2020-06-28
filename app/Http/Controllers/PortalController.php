<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
    }

    public function profile()
    {
        $title = 'Profile';
        return view('portal.profile.profile', ['title' => $title]);
    }

    public function updatepassuser(Request $request, $id)
    {
        $edit_password = \App\User::find($id);

        $this->validate($request, [
            'password' => 'min:6',
            'password2' => 'required_with:password|same:password|min:6'
        ]);

        $edit_password->password  = bcrypt($request->input('password'));
        $edit_password->save();
        return redirect('/profile')->with(['sukses' => 'Password has changed']);
    }

    public function email()
    {
        $title = 'E-mail';
        return view('portal.useremail.email_inbox', ['title' => $title]);
    }

    public function composemail()
    {
        $title = 'Compose';
        return view('portal.useremail.email_compose', ['title' => $title]);
    }
}
