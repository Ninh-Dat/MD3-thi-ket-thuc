<?php

namespace App\Repository;

use App\Models\Status;

class StatusRepository extends BaseRepository
{

    public function getModel()
    {
       return Status::class;
    }
}