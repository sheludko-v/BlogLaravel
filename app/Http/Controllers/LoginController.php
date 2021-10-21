<?php

    namespace App\Http\Controllers;

    use App\Models\Login;
    use App\Models\Post;
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

            $validated = validate($request->all(), Login::getRules());

            alert(__('Вход выполнен!'));


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
