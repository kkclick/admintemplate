<?php

namespace App\Repositories;

use App\Models\LeaveClaim;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LeaveClaimRepository
 * @package App\Repositories
 * @version March 17, 2018, 1:56 pm UTC
 *
 * @method LeaveClaim findWithoutFail($id, $columns = ['*'])
 * @method LeaveClaim find($id, $columns = ['*'])
 * @method LeaveClaim first($columns = ['*'])
*/
class LeaveClaimRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Reason',
        'AppliedDate'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LeaveClaim::class;
    }
}
