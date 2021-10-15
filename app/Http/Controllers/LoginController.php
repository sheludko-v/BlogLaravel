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

            alert(__('Вход произведен успешно'));

//            if (true) {
//                return redirect()->back()->withInput();
//            }

            return redirect()->route('user');
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
