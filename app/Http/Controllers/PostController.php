<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
		return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|min:5|max:255',
            'body' => 'required'
        ));

		$post = new Post;
		$post->title = $request->title;
        $post->slug = $request->slug;
		$post->body = $request->body;
		
		$post->save();
		
		$request->session()->flash('success', 'The blog post was successfully saved');
		
		return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$post = Post::find($id);
		return view('posts/show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$post = Post::find($id);
		return view('posts/edit')->withPost($post);
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
        // validate the dataz
		// save the daa to the database
		// set flash data with success message
		//redirect with flash data to posts.show
		$this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts, slug',
            'body' => 'required'
        ));
		
		$post = Post::find($id);
		
		$post->title = $request->title;
        $post->slug = $request->slug;
		$post->body = $request->body;
		
		$post->save();
		
		$request->session()->flash('success', 'The blog post was successfully saved');
		
		return redirect()->route('posts.show', $post->id);
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //validate the dataz
        $post = Post::find($id);

        $post->delete();
        Session::flash('success', "The post was successfully deleted.");
        return redirect()->route('posts.index');
	}
}
