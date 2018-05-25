<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

use App\Http\Requests\StoreRestaurant;

class RestaurantAPIController extends Controller
{
  public function index()
  {
    return Restaurant::all();
  }
  public function create()
  {
  //
  }
  public function store(StoreRestaurant $request)
  {
    $Restaurant = Restaurant::create($request->all());
    return response()->json($Restaurant, 201);

    /*$validator = StoreRestaurant::make(Input::all());
    if ($validator->fails())
      return
    return response()->json($Restaurant, 201);

    /*$rules = array(
      'name' => 'required',
    );

    $validator = Validator::make(Input::all(), $rules);
    // process the login
    if ($validator->fails()) {
      return Redirect::to('categories/' . $id . '/edit')
      ->withErrors($validator)
      ->withInput(Input::except('password'));
    } else {
      // store
      $category = Category::find($id);
      $category->name = Input::get('name');
      $category->save();
      // redirect
      Session::flash('message', 'Successfully updated category!');
      return Redirect::to('categories');
    }*/

    //$errors->all()
    /*
    [
      {"error": "isBlank", "path": ["username"]},
      {"error": "isBlank", "path": ["password"]}
    ]
    */
  }

  public function show(Request $request)
  {
    $Restaurant = Restaurant::find($request['id']);
    return response()->json($Restaurant, 201);
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request)
  {
    //
    $Restaurant = Restaurant::find($request['id']);
    $Restaurant->update($request->all());
    return response()->json($Restaurant, 200);
  }

  public function destroy(Request $request)
  {
    $Restaurant = Restaurant::find($request['id']);
    $Restaurant->delete();
    return response()->json(null, 204);
  }
}
