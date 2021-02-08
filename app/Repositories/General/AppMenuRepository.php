<?php


namespace Repository\General;


use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use App\Models\General\Menu\AppMenu;
use Illuminate\Support\Facades\Storage;

class AppMenuRepository extends BaseRepository
{

    function model()
    {
        return AppMenu::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('fileuploads/menus', $file);
    }

    public function updateMenu($id)
    {
        $menu = $this->findById($id);
        Storage::delete($menu->icon);
    }

    public function deleteMenu($id)
    {
        $menu = $this->findById($id);
        Storage::delete($menu->icon);
        $menu->delete();
    }
}
