<?php

namespace App\Http\Controllers\Backend\Product\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Product\Base\ColorRepository;

class ColorController extends Controller
{
    public $colorRepo;

    public function __construct(ColorRepository $colorRepository)
    {
        $this->colorRepo = $colorRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = $this->colorRepo->getAll();
        return view('backend.product.base.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.base.color.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = $this->colorRepo->findByID($id);

        return view('backend.product.base.color.form', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->colorRepo->deletedByID($id);
        notify()->success('Color Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.colors.index');
    }
}
