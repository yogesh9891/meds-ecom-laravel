<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
 use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory,HasRoles;

		protected $guard = 'admin';

        protected $fillable = [
            'name', 'email', 'password',
        ];

     

   public function userPermissions()
   {
   		$role =  $this->getRoleNames()[0];

   		$role = Role::where('name',$role)->first();

   		return $role->Permissions;

   }
}
