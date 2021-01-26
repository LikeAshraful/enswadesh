<?php

namespace Repository\General\Interaction;

use App\Models\General\Interaction\InteractionFile;
use Repository\BaseRepository;

class InteractionFileRepository extends BaseRepository
{
    public function model()
    {
        return InteractionFile::class;
    }

}
