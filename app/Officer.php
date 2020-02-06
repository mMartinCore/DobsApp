<?php

namespace App;
use App\ Commendation;
use App\User;
use App\Posting;
use App\Skill;
use App\Rank;
use App\Email;
use App\Leave;
use App\Phone;
use App\Promotion ;
use App\Complaint;
use App\Course;
use App\Courtcase ;
use App\Discipline;
use App\Exam;
use App\Firearmbooklet;
use App\Firearmkeepcare;
use App\Interdiction;
use App\Firearmprivate ;
use App\Pmas ;
use App\Preservice ;
use App\Retire;
use App\Suspension ;
use App\Division;




use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{

    public function division()
    {
        return $this->hasMany('App\Division');
    }

    public function posting()
    {
        return $this->hasMany('App\Posting');
    }

    public function dependent()
    {
        return $this->hasMany('App\Dependent');
    }
    public function spouse()
    {
        return $this->hasMany('App\Spouse');
    }


    public function skill()
    {
        return $this->hasMany('App\Skill');
    }


    public function commendation()
    {
        return $this->hasMany('App\Commendation');
    }

    public function promotion()
    {
        return $this->hasMany('App\Promotion');
    }

    public function rank()
    {
        return $this->belongsTo('App\Rank');
    }
    public function email()
    {
        return $this->hasMany('App\Email');
    }
    public function phone()
    {
        return $this->hasMany('App\Phone');
    }

    public function  leave()
    {
        return $this->hasMany('App\Leave');
    }


    public function complaint()
    {
        return $this->hasMany('App\Complaint');
    }


    public function  course()
    {
        return $this->hasMany('App\Course');
    }


    public function  courtcase()
    {
        return $this->hasMany('App\Courtcase');
    }

    public function  discipline()
    {
        return $this->hasMany('App\Discipline');
    }


    public function  exam()
    {
        return $this->hasMany('App\Exam');
    }


    public function firearmbooklet()
    {
        return $this->hasMany('App\Firearmbooklet');
    }

    public function firearmkeepcare()
    {
        return $this->hasMany('App\Firearmkeepcare');
    }


    public function interdiction()
    {
        return $this->hasMany('App\Interdiction');
    }

    public function  firearmprivate()
    {
        return $this->hasMany('App\Firearmprivate');
    }


    public function  pmas()
    {
        return $this->hasMany('App\Pmas');
    }


    public function  preservice()
    {
        return $this->hasMany('App\Preservice');
    }

    public function  retire()
    {
        return $this->hasMany('App\Retire');
    }

    public function  suspension()
    {
        return $this->hasMany('App\Suspension');
    }



}
