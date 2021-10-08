<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(Request $request)
    {




        return view('login.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
//        $ip = $request->ip();
//        $path = $request->path();
//        $url = $request->url();
//
//        dd($ip, $path, $url);
//
//
//        $email = $request->input('email');
//        $password = $request->input('password');
//        $remember = $request->input('remember');
//
//        dd($email, $password, $remember);

        if (true) {
            return redirect()->back()->withInput();
        }

        return 'Запрос на вход';
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
