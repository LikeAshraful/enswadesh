<?php

namespace Repository\Module;

use App\Models\Module;
use Repository\BaseRepository;

class ModuleRepository extends BaseRepository
{
    public function model()
    {
        return Module::class;
    }
}
