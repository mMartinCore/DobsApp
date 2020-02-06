<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Corpse;
class Funeralhome extends Model
{
    public function corpse()
    {
        return $this->hasMany('App\Corpse');
    }


}
