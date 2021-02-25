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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weights = $this->weightRepo->getAll();
        return view('backend.product.base.weight.index',  compact('weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.base.weight.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeightRequest $request)
    {
        $this->weightRepo->create($request->except('user_id') +
            [
                'user_id' => Auth::id()
            ]);

        notify()->success('Weight Successfully Added.', 'Added');
        return redirect()->route('backend.weights.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $weight = $this->weightRepo->findByID($id);
        return view('backend.product.base.weight.form', compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeightRequest $request, $id)
    {
        $this->weightRepo->updateByID($id, $request->except('user_id') +
            [
                'user_id' => Auth::id()
            ]);

        notify()->success('Weight Successfully Updated.', 'Updated');
        return redirect()->route('backend.weights.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->weightRepo->deletedByID($id);
        notify()->success('Weight Successfully Deleted.', 'Deleted');
        return redirect()->route('backend.weights.index');
    }
}
