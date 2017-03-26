<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Hash::
//        dd(Post::paginate(4));
//        dd(Post::orderBy('hot','desc')->get()->slice(0,6));

        $posts=Post::orderBy('created_at','desc')->paginate(7);
//        dd($posts->currentPage);
//        dd($post);
//        $post->withPath();
        return view('front.home')->with('posts',$posts)->with('hot_posts',Post::orderBy('hot','desc')->get()->slice(0,6));
    }

    public function contact()
    {
        \Session::flash('toast','不要尝试联系我！');
        return redirect()->back();
    }

    public function about()
    {
        \Session::flash('toast','哈喽');
        return redirect()->back();
    }

    public function subscribe()
    {

        // return generated xml (string) , cache whole file
        $view= view('front.feed')->with('posts',Post::all())->render();

        return response($view)->header('Content-Type', 'text/xml');
    }
}
