<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Division;
class Parish extends Model
{
    public function division()
    {
        return $this->hasMany('App\Division');
    }
}
