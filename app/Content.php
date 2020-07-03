<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function videos(){
    	return $this->hasMany(Video::class);
    }
     public function posts(){
    	return $this->hasMany(Post::class);
    }
}
