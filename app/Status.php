<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Leave;
class Status extends Model
{
    public function leave()
    {
        return $this->hasMany('App\Leave');
    }
}
