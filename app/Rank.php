<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Investigator;
class Rank extends Model
{

    public function investigator()
    {
        return $this->hasMany('App\Investigator');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
