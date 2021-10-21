<?php

    namespace App\Http\Requests\Post;

    use Illuminate\Foundation\Http\FormRequest;

    class StorePostRequest extends FormRequest
    {

        public function authorize()
        {
            return true;
        }


        public function rules()
        {
            return [
                'title' => ['required', 'string', 'max:100'],
                'content' => ['required', 'string', 'max:10000'],
            ];
        }
    }
