<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PostMiddlewar;
use App\Models\Post;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all()->reverse();
        // $posts->load('user');
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        // echo url("/posts/{$posts[0]->id}");
        // echo url()->current();
        // echo url()->previous();
        return view('posts.posts', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()
        // ->json(['name' => 'Abigail', 'state' => 'CA'])
        // ->withCallback($request->input('callback'));

        
        $post = new Post();



        $category_id = $request->category_id;

        $post->user_id = Auth::id(); 
        $post->title = $request->title;
        $post->body = $request->body;
        if($post->save()){
            $saved_post_id = $post->id;
            DB::table('category_post')->insert(['post_id' => $saved_post_id, 'category_id' => $category_id]);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $model = new Post();
        $post = $model->find($id);
        return view('posts.show', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new Post();
        $post = $model->find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = new Post();
        $p = $post->find($id);
        $post->user_id = $p->user_id;
        $post->title = $request->title;
        $post->body = $request->body;
        $req = $post->where('id', $id)->update(['user_id'=>$post->user_id, 'title'=>$post->title, 'body'=>$post->body]);
        if($req){
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = new Post();
        $req = $post->where('id', $id)->delete();
        if($req){
            return redirect('/posts');
        }
    }
}
