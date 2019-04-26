<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //access berish uchun userga connect qilishda
    public function user(){
        return $this->belongsTo('App\User');
    }
}
