<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    //

// public function setCreatedAtAtribute($creation)
// 	{
	
// 	}


public function getCreatedAtAttribute($creation)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $creation);
        return $utc->setTimezone('America/Chicago');
    }


public function getUpdatedAtAttribute($update)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $update);
        return $utc->setTimezone('America/Chicago');
    }
}