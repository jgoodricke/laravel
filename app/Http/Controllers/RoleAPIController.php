<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class RoleAPIController extends Controller
{
  public function index()
  {
    return Role::all();
  }
  public function create()
  {
  //
  }
  public function store(Request $request)
  {
    $Role = Role::create($request->all());
    return response()->json($Role, 201);
  }
  public function show(Request $request)
  {
    $Role = Role::find($request['id']);
    return response()->json($Role, 201);
  }
  public function edit($id)
  {
    //
  }
  public function update(Request $request)
  {
    //
    $Role = Role::find($request['id']);
    $Role->update($request->all());
    return response()->json($Role, 200);
  }
    public function destroy(Request $request)
  {
    $Role = Role::find($request['id']);
    $Role->delete();
    return response()->json(null, 204);
  }
}
