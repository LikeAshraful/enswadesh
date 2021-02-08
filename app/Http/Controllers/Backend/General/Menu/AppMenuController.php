<?php

namespace App\Http\Controllers\Backend\General\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\General\AppMenuRepository;

class AppMenuController extends Controller
{
    public $appMenuRepo;

    public function __construct(AppMenuRepository $appMenuRepository)
    {
        $this->appMenuRepo = $appMenuRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $appmenus = $this->appMenuRepo->getAll();
        return view('backend.general.menu.appmenu.index',  compact('appmenus'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('backend.general.menu.appmenu.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        $icon = $request->hasFile('icon') ? $this->appMenuRepo->storeFile($request->file('icon')) : null;
        $this->appMenuRepo->create($request->except('icon') +
            [
                'icon' => $icon
            ]);

        notify()->success('App Menu Successfully Added.', 'Added');
        return redirect()->route('backend.menus.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $menu = $this->appMenuRepo->findByID($id);
        return view('backend.general.menu.appmenu.form', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->appMenuRepo->deleteMenu($id);
        notify()->warning('App Menu Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.menus.index');
    }
}
