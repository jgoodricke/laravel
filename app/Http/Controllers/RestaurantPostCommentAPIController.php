<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class RestaurantPostCommentAPIController extends Controller
{
  public function show(Request $request)
  {
    $Restaurant = Restaurant::find($request['id']);
    $Restaurant->update($request->all());
    //$posts = $Restaurant->posts;
    //$comments = $posts->comments;
    var_dump($Restaurant->posts);
    foreach($Restaurant->posts as $p){
      var_dump($p->comments);
    }
    //return response()->json($Restaurant, 200);

  /*  return [
    'id' => $Restaurant->id,
    'name' => $Restaurant->name,
    //TODO: FinishThis
    'posts' => $posts
    'comments' => $posts->comments
  ];*/
    //return response()->json($Restaurant, 201);
  }
}
