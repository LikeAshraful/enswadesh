<?php

namespace App\Http\Controllers\Backend\General\Menu;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Menu\AppMenu;

class AppMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $appmenus = AppMenu::all();
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
            'menu_name' => 'required',
            'menu_description' => 'required',
            'menu_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        // if ($menu_icon = $request->file('menu_icon')) {
        //     $filename = rand(10, 100) . time() . '.' . $menu_icon->getClientOriginalExtension();
        //     $location = public_path('/uploads/shopproperty/menus/' . $filename);
        //     Image::make($menu_icon)->resize(600, 400)->save($location);
        // }
        $this->storeImage($request->file('menu_icon'));


        $slug = Str::of($request->menu_name)->slug('_');
        AppMenu::create($request->except('menu_icon', 'menu_slug') +
            [
                'menu_icon' => $filename,
                'menu_slug' => $slug
            ]);

        notify()->success('App Menu Successfully Added.', 'Added');
        return redirect()->route('backend.menus.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function storeImage($menu_icon)
    {
        if ($menu_icon) {
            $filename = rand(10, 100) . time() . '.' . $menu_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/menus/' . $filename);
            Image::make($menu_icon)->resize(600, 400)->save($location);
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $menu = AppMenu::find($id);
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
        //dd($request->file('menu_icon'));
        $data = AppMenu::find($id);
        $menu_icon = $data->menu_icon;
        if (!empty($request->menu_name)) {
            $slug = Str::of($request->menu_name)->slug('_');
        } else {
            $slug = $data->menu_slug;
        }

        // if ($image = $request->file('menu_icon')) {
        //     $menu_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
        //     $locationc = public_path('/uploads/shopproperty/menus/' . $menu_icon);
        //     Image::make($image)->resize(600, 400)->save($locationc);
        //     $oldFilenamec = $data->menu_icon;
        //     $data->menu_icon = $menu_icon;
        //     Storage::delete('/uploads/shopproperty/menus/' . $oldFilenamec);
        // }
        $this->updateImage($request->file('menu_icon'), $data);
        // AppMenu info update
        $data = $data->update($request->except('menu_slug', 'menu_icon') +
            [
                'menu_slug' => $slug,
                'menu_icon' => $menu_icon
            ]);

        notify()->success('App Menu Successfully Updated.', 'Updated');
        return redirect()->route('backend.menus.index');
    }


    public function updateImage($image, $data)
    {
        if ($image) {
            $menu_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/menus/' . $menu_icon);
            //dd($locationc);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->menu_icon;
            $data->menu_icon = $menu_icon;
            Storage::delete('/uploads/shopproperty/menus/' . $oldFilenamec);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data = AppMenu::find($id);
        $oldFilename = $data->menu_icon;
        Storage::delete('/uploads/shopproperty/menus/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.menus.index');
    }
}
