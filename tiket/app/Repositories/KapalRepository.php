<?php

namespace App\Repositories;

use App\Models\Kapal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KapalRepository
 * @package App\Repositories
 * @version January 29, 2019, 1:49 am UTC
 *
 * @method Kapal findWithoutFail($id, $columns = ['*'])
 * @method Kapal find($id, $columns = ['*'])
 * @method Kapal first($columns = ['*'])
*/
class KapalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kapal::class;
    }
}
