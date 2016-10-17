<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// use App\Validate as ValForm;
// use App\Models\Validate as ValFiles;

//  Required for the Log Class: 
use Illuminate\Support\Facades\Log; 


class PostsController extends Controller
{
    // use this function to keep people from accessing site features unless they are logged in:
//     public function __construct()
// {
//     $this->middleware('auth', ['except' => ['index', 'show']]);
// }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort(403);
        //
        Log::info('This is some useful information.');

        Log::debug('Here is some information that will help me find an error');

        Log::warning('Something could be going wrong.');

        Log::error('Something is really going wrong.');
        // defining your error
      

        // $post = new Post();
        // dd($post);

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

        // abort(403);
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
         // abort(404);
            $rules = array(
                'title' => 'required|max:100',
                'content' => 'required',
                'url' => 'required',
                );
            $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs.');

            $this->validate($request, $rules);
            $request->session()->forget('ERROR_MESSAGE');
            $post = new Post;
        	$post->created_by = $request->user()->id;
            // you can also use the previous line of code (line 97) to assign a user_id:
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

         // abort(404);
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
      
        $post = Post::findOrFail($id);
        $data = ['post' => $post];
        return view('posts.edit')->with($data);
        // abort(403);
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

     // abort(404);
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
         // abort(403);
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
