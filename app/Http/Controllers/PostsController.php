<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(Post::all());
        $posts = Post::paginate(5);
        $data = ['posts'=>$posts];
    	return view('posts.index', $data);
    	

    	// adlister version: Do not use this code...an example of the differences in syntax
    	// foreach ($posts->attributes as $post) {
    	// 	echo $post['title'];
    	// 	echo $post['url'];
    	// 	echo $post['content'];
    	// }

    	//  laravel version: this is the correct syntax we should be using...
    	// foreach ($posts as $post) {
    	// 	echo $post->'title';
    	// 	echo $post->'url';
    	// 	echo $post->'content';
    	// }

        // return "Hello Jessica!";
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
            $rules = array(
                'title' => 'required|max:100',
                'content' => 'required',
                'url' => 'required',
                );
            $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs.');

            $this->validate($request, $rules);
            $request->session()->forget('ERROR_MESSAGE');
            $post = new Post;
        	$post->created_by = 1;
        	$post->title = $request->title;
        	$post->content = $request->content;
        	$post->url = $request->url;
        	$post->save();

           $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully!');
           // $request->session()->forget('SUCCESS_MESSAGE');
        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        $data = ['post' => $post];
        // dd($post);
        return view('posts.show')->with($data);
        // return "Show a specific post";
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
        $data = ['post' => $post];
        return view('posts.edit')->with($data);
      
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
        $rules = array(
                'title' => 'required|max:100',
                'content' => 'required',
                'url' => 'required',
                );
            $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs.');

            $this->validate($request, $rules);
            $request->session()->forget('ERROR_MESSAGE');
            $post = new Post;
            $post->created_by = 1;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->url = $request->url;
            $post->save();

           $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully!');
           // $request->session()->forget('SUCCESS_MESSAGE');
        return redirect()->action('PostsController@show', $post->id);

		$post = Post::find($id);
		$post->title = $request->title;
		$post->content = $request->content;
	    $post->url = $request->url;
	    $post->save();

	    return redirect()->action('PostsController@show', $post->$id);
        //
  //       if ($request->has('title')) {
  //   	// name is not empty
  //       	return "Thanks for editing your info";
		// } else {
  //   	// name is empty
		// 	return "Fields cannot be empty, please check your submission.";
		// }

        
			return back()->withInput();

		
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $rules = array(
                'title' => 'required|max:100',
                'content' => 'required',
                'url' => 'required',
                );
            $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs.');

            $this->validate($request, $rules);
            $request->session()->forget('ERROR_MESSAGE');
            $post = new Post;
            $post->created_by = 1;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->url = $request->url;
            $post->save();

           $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully!');
           // $request->session()->forget('SUCCESS_MESSAGE');
        return redirect()->action('PostsController@show', $post->id);
         
        // return "Delete a specific post";
    }
}
