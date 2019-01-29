<?php

namespace App\Repositories;

use App\Models\Rute;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RuteRepository
 * @package App\Repositories
 * @version January 29, 2019, 1:50 am UTC
 *
 * @method Rute findWithoutFail($id, $columns = ['*'])
 * @method Rute find($id, $columns = ['*'])
 * @method Rute first($columns = ['*'])
*/
class RuteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'harga'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rute::class;
    }
}
