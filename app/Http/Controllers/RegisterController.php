<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class RegisterController extends Controller
    {

        public function index()
        {
            return view('register.index');
        }


        public function create()
        {
            //
        }


        public function store(Request $request)
        {
//            if ($name = $request->name) {
//                $name = strtoupper($name);
//            }
//
//            return $name;

            if (true) {
                return redirect()->back()->withInput();
            }

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
