<?php

namespace App\Http\Controllers\Backend\Product\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Repository\Product\Base\ColorRepository;

class ColorController extends Controller
{
    public $colorRepo;

    public function __construct(ColorRepository $colorRepository)
    {
        $this->colorRepo = $colorRepository;
    }

    public function index()
    {
        Gate::authorize('backend.colors.index');
        $colors = $this->colorRepo->getAll();
        return view('backend.product.base.color.index', compact('colors'));
    }

    public function create()
    {
        Gate::authorize('backend.colors.create');
        return view('backend.product.base.color.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $this->colorRepo->create($request->except(['user_id']) + [
            'user_id' => Auth::id(),
        ]);
        notify()->success('Color Successfully Created.', 'Created');
        return redirect()->route('backend.colors.index');
    }

    public function edit($id)
    {
        Gate::authorize('backend.colors.edit');
        $color = $this->colorRepo->findByID($id);
        return view('backend.product.base.color.form', compact('color'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $this->colorRepo->updateByID($id, $request->except(['user_id']) + [
            'user_id' => Auth::id(),
        ]);
        notify()->success('Color Successfully Updated.', 'Updated');
        return redirect()->route('backend.colors.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.colors.destroy');
        $this->colorRepo->deletedByID($id);
        notify()->success('Color Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.colors.index');
    }
}
