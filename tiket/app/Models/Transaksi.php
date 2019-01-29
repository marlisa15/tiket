<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaksi
 * @package App\Models
 * @version January 29, 2019, 1:44 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection DetailTransaksi
 * @property string nama
 * @property integer no_telp
 * @property integer total
 * @property string keterangan
 */
class Transaksi extends Model
{
    use SoftDeletes;

    public $table = 'transaksi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'no_telp',
        'total',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'no_telp' => 'integer',
        'total' => 'integer',
        'keterangan' => 'string'
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
