<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class BlogController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index(Request $request)
        {
            $search = $request->input('search');
            $category_id = $request->input('category_id');

//            dd($search, $category_id);

            $post = (object)[
                'id' => 123,
                'title' => 'Lorem ipsum dolor sit amet.',
                'content' => 'Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisicing elit.',
                'category_id' => 1,
            ];

            $posts = array_fill(0, 15, $post);

            $posts = array_filter($posts, function ($post) use ($search, $category_id) {

                if ($search && !str_contains(strtolower($post->title), strtolower($search))) {
                    return false;
                }

                if ($category_id && $post->category_id != $category_id) {
                    return false;
                }

                return true;
            });

            $categories = [
                null => __('Все категории'),
                1 => __('Первая категория'),
                2 => __('Вторая категория'),
            ];

            return view('blog.index', compact('posts', 'categories'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $post = (object)[
                'id' => 123,
                'title' => 'Lorem ipsum dolor sit amet.',
                'content' => 'Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisicing elit.',
            ];
            return view('blog.show', compact('post'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }

        public function like($id)
        {
            return 'Поставить лайк';
        }
    }
