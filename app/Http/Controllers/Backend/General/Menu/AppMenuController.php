<?php

namespace App\Http\Controllers\Backend\General\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\General\AppMenuRepository;
use App\Http\Requests\General\Menu\StoreAppMenuRequest;
use App\Http\Requests\General\Menu\UpdateAppMenuRequest;

class AppMenuController extends Controller
{
    public $appMenuRepo;

    public function __construct(AppMenuRepository $appMenuRepository)
    {
        $this->appMenuRepo = $appMenuRepository;
    }

    public function index()
    {
        Gate::authorize('backend.menus.index');
        $appmenus = $this->appMenuRepo->getAll();
        return view('backend.general.menu.appmenu.index',  compact('appmenus'));
    }

    public function create()
    {
        Gate::authorize('backend.menus.create');
        return view('backend.general.menu.appmenu.form');
    }

    public function store(StoreAppMenuRequest $request)
    {
        $icon = $request->hasFile('icon') ? $this->appMenuRepo->storeFile($request->file('icon')) : null;
        $this->appMenuRepo->create($request->except('icon') +
            [
                'icon' => $icon
            ]);
        notify()->success('App Menu Successfully Added.', 'Added');
        return redirect()->route('backend.menus.index');
    }

    public function edit($id)
    {
        Gate::authorize('backend.menus.edit');
        $menu = $this->appMenuRepo->findByID($id);
        return view('backend.general.menu.appmenu.form', compact('menu'));
    }

    public function update(UpdateAppMenuRequest $request, $id)
    {
        $data = $this->appMenuRepo->findByID($id);
        $menuIcon = $request->hasFile('icon');
        $icon = $menuIcon ? $this->appMenuRepo->storeFile($request->file('icon')) : $data->icon;
        if ($menuIcon) {
            $this->appMenuRepo->updateMenu($id);
        }
        $this->appMenuRepo->updateByID($id, $request->except('icon') +
            [
                'icon' => $icon
            ]);
        notify()->success('App Menu Successfully Updated.', 'Updated');
        return redirect()->route('backend.menus.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.menus.destroy');
        $this->appMenuRepo->deleteMenu($id);
        notify()->warning('App Menu Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.menus.index');
    }
}
