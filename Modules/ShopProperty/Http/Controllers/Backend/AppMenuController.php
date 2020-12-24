<?php

namespace Modules\ShopProperty\Http\Controllers\Backend;

use Image;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\ImageManager;
use Modules\ShopProperty\Entities\AppMenu;
use Illuminate\Contracts\Support\Renderable;

class AppMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $appmenus = AppMenu::all();
        return view('shopproperty::Backend.appmenu.index',  compact('appmenus'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shopproperty::Backend.appmenu.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        request()->validate([
            'menu_name' => 'required',
            'menu_description' => 'required',
            'menu_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        if ($menu_icon = $request->file('menu_icon')) {
            $filename = rand(10, 100) . time() . '.' . $menu_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shopproperty/menus/' . $filename);
            Image::make($menu_icon)->resize(600, 400)->save($location);
        }

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
    public function show($id)
    {
        return view('shopproperty::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $menu = AppMenu::find($id);
        return view('shopproperty::Backend.appmenu.form', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = AppMenu::find($id);
        $menu_icon = $data->menu_icon;
        if (!empty($request->menu_name)) {
            $slug = Str::of($request->menu_name)->slug('_');
        } else {
            $slug = $data->menu_slug;
        }

        if ($image = $request->file('menu_icon')) {
            $menu_icon = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $locationc = public_path('/uploads/shopproperty/menus/' . $menu_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->menu_icon;
            $data->menu_icon = $menu_icon;
            Storage::delete('/uploads/shopproperty/menus/' . $oldFilenamec);
        }

        // AppMenu info update
        $data = $data->update($request->except('menu_slug', 'menu_icon') +
            [
                'menu_slug' => $slug,
                'menu_icon' => $menu_icon
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
        $data = AppMenu::find($id);
        $oldFilename = $data->menu_icon;
        Storage::delete('/uploads/shopproperty/menus/' . $oldFilename);
        $data->delete();
        return redirect()->route('backend.menus.index');
    }
}