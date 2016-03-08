<?php

namespace App\Models\Auth;

use Zizaco/Entrust/EntrustPermission;

class Permission extends EntrustPermission
{
  public function  roles(){
    return $this->belongsToMany('laravel\Models\Auth\Role');
  }
}
