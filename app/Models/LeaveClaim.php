<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LeaveClaim
 * @package App\Models
 * @version March 17, 2018, 1:56 pm UTC
 *
 * @property string Reason
 * @property date AppliedDate
 */
class LeaveClaim extends Model
{
    use SoftDeletes;

    public $table = 'leave_claims';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Reason',
        'AppliedDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Reason' => 'string',
        'AppliedDate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Reason' => 'required',
        'AppliedDate' => 'required'
    ];

    
}
