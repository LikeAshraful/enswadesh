<?php


namespace Repository\General;


use Repository\BaseRepository;
use App\Models\General\Tutorial;

class TutorialRepository extends BaseRepository
{

    function model()
    {
        return Tutorial::class;
    }
}
