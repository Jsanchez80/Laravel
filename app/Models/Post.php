<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    // public function user tells laravel that the public function posts located in User.php is relational/dependent on it. 
    public function user()
    	{
    		return $this->belongsTo('App\User', 'created_by', 'id');
    	}

    
}
