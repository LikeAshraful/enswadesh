<?php

namespace App\Http\Controllers\Backend\Product\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Product\Base\WeightRepository;

class WeightController extends Controller
{
    public $weightRepo;

    public function __construct(WeightRepository $weightRepository)
    {
        $this->weightRepo = $weightRepository;
    }

    public function index()
    {
        Gate::authorize('backend.Weights.index');
        $weights = $this->weightRepo->getAll();
        return view('backend.product.base.weight.index',  compact('weights'));
    }

    public function create()
    {
        Gate::authorize('backend.Weights.create');
        return view('backend.product.base.weight.form');
    }

    public function store(StoreWeightRequest $request)
    {
        $this->weightRepo->create($request->except('user_id') +
            [
                'user_id' => Auth::id()
            ]);
        notify()->success('Weight Successfully Added.', 'Added');
        return redirect()->route('backend.weights.index');
    }

    public function edit($id)
    {
        Gate::authorize('backend.Weights.edit');
        $weight = $this->weightRepo->findByID($id);
        return view('backend.product.base.weight.form', compact('weight'));
    }

    public function update(UpdateWeightRequest $request, $id)
    {
        $this->weightRepo->updateByID($id, $request->except('user_id') +
            [
                'user_id' => Auth::id()
            ]);
        notify()->success('Weight Successfully Updated.', 'Updated');
        return redirect()->route('backend.weights.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.Weights.destroy');
        $this->weightRepo->deletedByID($id);
        notify()->success('Weight Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.weights.index');
    }
}