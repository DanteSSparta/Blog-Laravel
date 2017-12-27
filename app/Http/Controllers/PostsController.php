<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index','show']);
    }

    public function index(\App\Tag $tag=null)
   	{	

      
      //$posts = $posts->all();
   		$posts = Post::latest()
        ->filter([
          'month'=>request('month'),
          'year'=>request('year')
        ])
        ->get();

      //Temporary
      

   		return view('posts.index',compact('posts'));
   	}
 	    public function show(Post $post)
   	{	
   		return view('posts.show',compact('post'));
   	}
   	public function create()
   	{	
   		return view('posts.create');
   	}

   	public function store()
   	{	

   		$this->validate(request(),[
   			'title'=>'required',
   			'body'=> 'required'
   		]);
   	
         auth()->user()->publish(
            new Post(request(['title','body']))
         );


      session()->flash('message','Your post has now been published');
   		
   		return redirect('/');
   		
   	}
}
