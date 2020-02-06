<?php

namespace App;
use App\Funeralhome;
use App\Investigator;
use App\User;
use App\Task;
use App\Station;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class corpse extends Model
{
    public function funeralhome()
    {
        return $this->belongsTo('App\Funeralhome');
    }
    public function corpse()
    {
        return $this->hasMany('App\Corpse');
    }

    public function investigator()
    {
        return $this->hasMany('App\Investigator');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function station()
    {
        return $this->belongsTo('App\Station');
    }

    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    public function storagedays()
    {
        $pickup_date = Carbon::parse($this->pickup_date);
        $burial_date = Carbon::parse($this->burial_date);

        $now = Carbon::now();
        if ($this->buried ==='Yes' && $this->burial_date !='' ) {
          return  $burial_date->diffInDays( $pickup_date );
        }else{
            $pickup_date = Carbon::parse($this->pickup_date);
            return $now->diffInDays( $pickup_date );
        }

    }


    public function processTime()
    {
        $processTime=0;
        $pickup_date = Carbon::parse($this->pickup_date);
        $postmortem_date = Carbon::parse($this->postmortem_date);
        if (  $postmortem_date!='' || $postmortem_date!= null) {
            $processTime=  $postmortem_date->diffInDays( $pickup_date );
        }

        return  $processTime;
    }



    public function excess()
    {
        $now = Carbon::now();

        $pickup_date = Carbon::parse($this->pickup_date);
        $burial_date = Carbon::parse($this->burial_date);

        if ($this->buried ==='Yes' && $this->burial_date !='' ) {
            return  $burial_date->diffInDays( $pickup_date ) - 30;
        }else{
        return $now->diffInDays( $pickup_date ) - 30;

        }

    }

}
