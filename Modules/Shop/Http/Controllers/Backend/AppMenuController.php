<?php

namespace Modules\Shop\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Shop\Entities\AppMenu;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Storage;
use Image;
use Intervention\Image\ImageManager;

class AppMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $appmenus = AppMenu::all();
        return view('shop::Backend.appmenu.index',  compact('appmenus'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shop::Backend.appmenu.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // dd(public_path());
        request()->validate([
            'menu_name' => 'required',
            'menu_description' => 'required',
            'menu_icon' => 'required|mimes:jpeg,jpg,png|max:500',
        ]);

        if ($menu_icon = $request->file('menu_icon')) {
            $filename = rand(10, 100) . time() . '.' . $menu_icon->getClientOriginalExtension();
            $location = public_path('/uploads/shop/menus/' . $filename);
            Image::make($menu_icon)->resize(600, 400)->save($location);
        }

        $slug = Str::of($request->menu_name)->slug('_');
        AppMenu::create($request->except('menu_icon', 'menu_slug') +
            [
                'menu_icon' => $filename,
                'menu_slug' => $slug
            ]);

        //toastr()->success('Blog created successfully');
        return redirect()->route('menus.index')
            ->with('success', 'Menu created successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('shop::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $appmenu = AppMenu::find($id);
        return view('shop::Backend.appmenu.edit', compact('appmenu'));
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
            $locationc = public_path('/uploads/shop/menus/' . $menu_icon);
            Image::make($image)->resize(600, 400)->save($locationc);
            $oldFilenamec = $data->menu_icon;
            $data->menu_icon = $menu_icon;
            Storage::delete('/uploads/shop/menus/' . $oldFilenamec);
        }

        // AppMenu info update
        $data = $data->update($request->except('menu_slug', 'menu_icon') +
            [
                'menu_slug' => $slug,
                'menu_icon' => $menu_icon
            ]);

        //Toastr::success('Child category successfully updated:)', 'Success');
        return redirect()->route('menus.index');
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
        Storage::delete('/uploads/shop/menus/' . $oldFilename);
        $data->delete();

        //Toastr::error('Main category successfully deleted:)', 'Deleted');
        return redirect()->route('menus.index');
    }
}
