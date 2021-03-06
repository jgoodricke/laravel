<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

use App\Http\Requests\StorePost;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       // Retrieve all the orders
       $posts = post::all();
       // Load the view and pass the orders
       return View::make('posts.index')
       ->with('posts', $posts);
     }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       return View::make('posts.create');
     }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(StorePost $request)
     {
         // Store the data to the database
         $post = new Post;
         $post->content = Input::get('content');
         $post->restaurant_id = Input::get('restaurant_id');
         $post->user_id = Input::get('user_id');
         $post->save();
         // redirect
         Session::flash('message', 'Successfully added post!');
         return Redirect::to('posts');
     }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       // Retrieve the order based on the id
       $post  = Post::find($id);
       // show the view and pass the order to it
       return View::make('posts.show')
       ->with('post', $post);
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       // Retrieve the order
       $post = Post::find($id);
       // show the edit form and pass the order
       return View::make('posts.edit')
       ->with('post', $post);
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(StorePost $request, $id)
     {
       // Validate
       // Read more on validation at http://laravel.com/docs/validation
         // store
         $post = Post::find($id);
         $post->content = Input::get('content');
         $post->restaurant_id = Input::get('restaurant_id');
         $post->user_id = Input::get('user_id');
         $post->save();
         // redirect
         Session::flash('message', 'Successfully updated post!');
         return Redirect::to('posts');
     }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       // Delete
       $post = Post::find($id);
       $post->delete();
       // redirect
       Session::flash('message', 'Successfully deleted the post!');
       return Redirect::to('posts');
     }
}
