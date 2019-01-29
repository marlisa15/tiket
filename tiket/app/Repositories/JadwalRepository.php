<?php

namespace App\Repositories;

use App\Models\Jadwal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JadwalRepository
 * @package App\Repositories
 * @version January 29, 2019, 1:47 am UTC
 *
 * @method Jadwal findWithoutFail($id, $columns = ['*'])
 * @method Jadwal find($id, $columns = ['*'])
 * @method Jadwal first($columns = ['*'])
*/
class JadwalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jadwal'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Jadwal::class;
    }
}
