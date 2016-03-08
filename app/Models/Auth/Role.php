<?php

namespace App\Models\Auth;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
  protected $fillable = ['name', 'display_name', 'description'];

  public function permissions(){
    return $this->belongsToMany('laravel\Models\Auth\Permission');
  }

  public function users(){
    return $this->belongsToMany('laravel\Models\Auth\User');
  }
}
