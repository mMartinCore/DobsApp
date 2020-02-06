<?php
namespace App;
use App\Division;
use App\Corpse;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Station
 * @package App\Models
 * @version October 31, 2019, 4:36 pm UTC
 *
 * @property integer user_id
 * @property string station
 * @property integer division_id
 * @property integer modify_by
 */
class Station extends Model
{
    use SoftDeletes;

    public $table = 'stations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'station',
        'division_id',
        'modify_by'
    ];




    public function division()
    {
        return $this->belongsTo('App\Division');
    }


    public function investigator()
    {
      return $this->hasMany('App\Investigator');
    }


    public function corpse()
    {
      return $this->hasMany('App\Corpse');
    }

    public function user()
    {
      return $this->hasMany('App\User');
    }





    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'id' => 'integer',
    //     'user_id' => 'integer',
    //     'station' => 'string',
    //     'division_id' => 'integer',
    //     'modify_by' => 'integer'
    // ];

    /**
     * Validation rules
     *
     * @var array
     */
    // public static $rules = [
    //     'station' => 'required',
    //     'division_id' => 'required',
    // ];


}
