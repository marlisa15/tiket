<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jadwal
 * @package App\Models
 * @version January 29, 2019, 1:47 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection DetailTransaksi
 * @property string jadwal
 */
class Jadwal extends Model
{
    use SoftDeletes;

    public $table = 'jadwal';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'jadwal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jadwal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function detailTransaksis()
    {
        return $this->hasMany(\App\Models\DetailTransaksi::class);
    }
}
