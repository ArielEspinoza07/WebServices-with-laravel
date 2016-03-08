<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use App\Models\Auth\User;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function __construct()
    {
      # code...
      header('Acces-Control-Allow-Origin:*');
      header('Acces-Control-Allow-Origin:GET,POST,PUT,DELETE,OPTIONS');
    }

    public function allUsers()
    {
      # code...
      $user = User::all();
      return Response::json($user,200);
    }

    public function getUser($id)
    {
      # code...
      $user = User::find($id);
      if($user){
        return Response::json($user,200);
      }else{
        return Response::json(['response'=>"Registro no encontrado"],400);
      }
    }

    public function saveUser()
    {
      # code...
      $input = Input::all();
      if($input){
        User::create($input);
        return Response::json(['response'=>"Registro almacenado"],200);
      }else{
        return Response::json(['response'=>"Registro no almacenado"],400);
      }
    }

}
