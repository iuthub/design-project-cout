<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;

	public function posts(){
	    return $this->hasMany('App\Post');
    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

}
