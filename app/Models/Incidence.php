<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Incidence
 * @package App\Models
 * @version October 15, 2019, 10:52 am UTC
 *
 * @property string details
 * @property string route_no
 * @property string route
 * @property string noplate
 * @property string sacco
 * @property string problem
 */
class Incidence extends Model
{
    use SoftDeletes;

    public $table = 'incidences';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'details',
        'route_no',
        'route',
        'noplate',
        'sacco',
        'problem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'details' => 'string',
        'route_no' => 'string',
        'route' => 'string',
        'noplate' => 'string',
        'sacco' => 'string',
        'problem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'details' => 'required',
        'route_no' => 'required',
        'sacco' => 'required'
    ];

    
}
