<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetailTransaksi
 * @package App\Models
 * @version January 29, 2019, 1:52 am UTC
 *
 * @property \App\Models\Jadwal jadwal
 * @property \App\Models\Kapal kapal
 * @property \App\Models\Rute rute
 * @property \App\Models\Transaksi transaksi
 * @property string waktu
 * @property integer jumlah_tiket
 * @property integer transaksi_id
 * @property integer kapal_id
 * @property integer jadwal_id
 * @property integer rute_id
 */
class DetailTransaksi extends Model
{
    use SoftDeletes;

    public $table = 'detail_transaksi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'waktu',
        'jumlah_tiket',
        'transaksi_id',
        'kapal_id',
        'jadwal_id',
        'rute_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'waktu' => 'string',
        'jumlah_tiket' => 'integer',
        'transaksi_id' => 'integer',
        'kapal_id' => 'integer',
        'jadwal_id' => 'integer',
        'rute_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jadwal()
    {
        return $this->belongsTo(\App\Models\Jadwal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function kapal()
    {
        return $this->belongsTo(\App\Models\Kapal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function rute()
    {
        return $this->belongsTo(\App\Models\Rute::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function transaksi()
    {
        return $this->belongsTo(\App\Models\Transaksi::class);
    }
}
