<?php

namespace App\Http\Controllers\Backend\Product\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Repository\Product\Base\SizeRepository;

class SizeController extends Controller
{
    protected $sizeRepo;

    public function __construct(SizeRepository $sizeRepository)
    {
        $this->sizeRepo = $sizeRepository;

    }

    public function index()
    {
        // Gate::authorize('backend.size.index');
        $sizes = $this->sizeRepo->getAll();
        return view('backend.product.base.size.index',compact('sizes'));
    }

    public function create()
    {
        // Gate::authorize('backend.size.create');
        return view('backend.product.base.size.form');
    }

    public function store(Request $request)
    {
        $this->sizeRepo->create($request->except('user_id') + [
            'user_id'       => Auth::id()
        ]);
        notify()->success('Product Size Successfully Added.', 'Added');
        return redirect()->route('backend.size.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        // Gate::authorize('backend.size.edit');
        $size = $this->sizeRepo->findByID($id);
        return view('backend.product.base.size.form',compact('size'));
    }

    public function update(Request $request, $id)
    {
        $size      = $this->sizeRepo->findByID($id);
        $size  = $this->sizeRepo->updateByID($id,$request->except('user_id') + [
            'user_id'       => Auth::id()
        ]);
        notify()->success('Product size Successfully Updated.', 'Updated');
        return redirect()->route('backend.size.index');
    }

    public function destroy($id)
    {
        // Gate::authorize('backend.size.destroy');
        $size   = $this->sizeRepo->findByID($id);
        $size->delete();
        notify()->success("Product Size Successfully Deleted", "Deleted");
        return back();
    }
}