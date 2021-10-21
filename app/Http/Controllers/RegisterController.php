<?php

    namespace App\Http\Controllers;

    use App\Models\Login;
    use App\Models\Register;
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
            $validated = validate($request->all(), Register::getRules());

            alert(__('Регистрация прошла успешно!'));

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
