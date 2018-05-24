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

//Retrieve restaurants based on country ID and category ID
class RestaurantIdAPIController extends Controller
{
  public function show(Request $request)
  {
    //$Restaurant = Restaurant::find($request['id']);
    $Restaurant = Restaurant::where('country_id', '=', $request['country_id'])
    ->where('category_id', '=', $request['category_id'])->get();

    return response()->json($Restaurant, 201);
  }
}
