<?php


namespace Repository\General;


use App\Models\General\Menu\AppMenu;
use Repository\BaseRepository;

class AppMenuRepository extends BaseRepository
{

    function model()
    {
        return AppMenu::class;
    }
}
