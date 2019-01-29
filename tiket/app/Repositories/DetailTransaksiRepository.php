<?php

namespace App\Repositories;

use App\Models\DetailTransaksi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DetailTransaksiRepository
 * @package App\Repositories
 * @version January 29, 2019, 1:52 am UTC
 *
 * @method DetailTransaksi findWithoutFail($id, $columns = ['*'])
 * @method DetailTransaksi find($id, $columns = ['*'])
 * @method DetailTransaksi first($columns = ['*'])
*/
class DetailTransaksiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'waktu',
        'jumlah_tiket',
        'transaksi_id',
        'kapal_id',
        'jadwal_id',
        'rute_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DetailTransaksi::class;
    }
}
