<?php

namespace App\Repositories;

use App\Models\EricHong;
use InfyOm\Generator\Common\BaseRepository;

class EricHongRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EricHong::class;
    }
}
