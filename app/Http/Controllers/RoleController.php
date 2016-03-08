<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Auth\Role;
use Illuminate\Support\Facades\Input;
use Log;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Requests;

class RoleController extends Controller
{
  public function __construct()
  {
    # code...
    header('Acces-Control-Allow-Origin:*');
    header('Acces-Control-Allow-Origin:GET,POST,PUT,DELETE,OPTIONS');
    $this->date = date('l jS \of F Y h:i:s A');
  }

  public function allRoles()
  {
    # code...
    $role = Role::all();
    return Response::json($role,200);
  }

  public function getRole($id)
  {
    # code...
    $role = Role::find($id);
    if($role){
      Log::info('showing role '.$role->name.' description '.$role->description.' for user: ', ['name' => 'Auth::user()->name', 
                ' username ' => 'Auth::user()->username',' email ' => 'Auth::user()->email', ' date ' => $this->date]);
      return Response::json($role,200);
    }else{
      return Response::json(['response'=>"Registro no encontrado"],400);
    }
  }

  public function saveRole()
  {
    # code...
    $input = Input::all();
    if($input){
      Role::create($input);
      return Response::json(['response'=>"Registro almacenado"],200);
    }else{
      return Response::json(['response'=>"Registro no almacenado"],400);
    }
  }
}
