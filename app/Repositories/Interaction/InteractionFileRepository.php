<?php

namespace Repository\Interaction;

use App\Models\Interaction\InteractionFile;
use Repository\BaseRepository;

class InteractionFileRepository extends BaseRepository
{
    public function model()
    {
        return InteractionFile::class;
    }

}
