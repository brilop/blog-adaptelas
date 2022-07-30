<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $posts = Post::all();
        // dd($posts); //mostra o que acontece na página em informações detalhadas
        return view('welcome', compact('posts'));

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
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request) : string
    {
        $data = $request->validated();
        Post::create($data);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, int $id)
    {
        // $post = Post::find($id);
        // $post->update([
        //     'title' => $request -> title,
        //     'description' => $request -> description,
        //     'author' => $request -> author,
        //     'text' => $request -> text
        // ]);
        // return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id) : RedirectResponse
    {
        $post = Post::find($id);
        if(isset($post)) $post->delete();
        return redirect()->route('blog.index');
    }
}
