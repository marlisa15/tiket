<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kapal
 * @package App\Models
 * @version January 29, 2019, 1:49 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection DetailTransaksi
 * @property string nama
 */
class Kapal extends Model
{
    use SoftDeletes;

    public $table = 'kapal';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
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
