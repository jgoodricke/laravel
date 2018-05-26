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
  }

  public function show(Request $request)
  {
    $rules = array(
      'id' => 'required|integer|min:0',
    );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
      return response()->json(['errors'=>$validator->errors()]);
    } else {
      $Restaurant = Restaurant::find($request['id']);
      return response()->json($Restaurant, 201);
    }
  }

  public function edit($id)
  {
    //
  }

  public function update(StoreRestaurant $request)
  {
    $rules = array(
      'id' => 'required|integer|min:0',
    );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
      return response()->json(['errors'=>$validator->errors()]);
    } else {
      $Restaurant = Restaurant::find($request['id']);
      $Restaurant->update($request->all());
      return response()->json($Restaurant, 200);
    }
  }

  public function destroy(Request $request)
  {
    $rules = array(
      'id' => 'required|integer|min:0',
    );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
      return response()->json(['errors'=>$validator->errors()]);
    } else {
      $Restaurant = Restaurant::find($request['id']);
      $Restaurant->delete();
      return response()->json(null, 204);
    }
  }
}
