<?php

namespace App\Http\Controllers;
use function view;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('about-us', ['blog_name' => 'UKF Blog']);
    }

    public function blog()
    {
        $posts = [
            ['id' => 1, 'title' => 'Prvý článok', 'excerpt' => 'This is the first post'],
            ['id' => 2, 'title' => 'Druhý článok', 'excerpt' => 'This is the second post'],
            ['id' => 3, 'title' => 'Tretí článok', 'excerpt' => 'This is the third post'],
        ];

        return view('blog', ['posts' => $posts]);
    }

    public function showBlog($id)
    {
        $posts = [
            1 => ['title' => 'Prvý článok', 'excerpt' => 'This is the first post', 'content' => 'This is the full content of the first post'],
            2 => ['title' => 'Druhý článok', 'excerpt' => 'This is the second post', 'content' => 'This is the full content of the second post'],
            3 => ['title' => 'Tretí článok', 'excerpt' => 'This is the third post', 'content' => 'This is the full content of the third post'],
        ];

        if (!array_key_exists($id, $posts)) {
            abort(404);
        }

        return view('blog-detail', ['post' => $posts[$id]]);
    }
}
