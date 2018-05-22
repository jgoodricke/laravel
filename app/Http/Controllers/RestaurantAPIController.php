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
  public function store(Request $request)
  {
    $Restaurant = Restaurant::create($request->all());
    return response()->json($Restaurant, 201);
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
