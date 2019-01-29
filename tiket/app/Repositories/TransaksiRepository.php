<?php

namespace App\Repositories;

use App\Models\Transaksi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TransaksiRepository
 * @package App\Repositories
 * @version January 29, 2019, 1:45 am UTC
 *
 * @method Transaksi findWithoutFail($id, $columns = ['*'])
 * @method Transaksi find($id, $columns = ['*'])
 * @method Transaksi first($columns = ['*'])
*/
class TransaksiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'no_telp',
        'total',
        'keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transaksi::class;
    }
}
