<?php

namespace Repository\General;

use Repository\BaseRepository;
use App\Models\General\Template;

class TemplateRepository extends BaseRepository
{
    function model()
    {
        return Template::class;
    }

}
