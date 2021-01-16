<?php

namespace Repository\General;

use App\Models\General\Video;
use Repository\BaseRepository;

class VideoRepository extends BaseRepository
{
    function model()
    {
        return Video::class;
    }
}
