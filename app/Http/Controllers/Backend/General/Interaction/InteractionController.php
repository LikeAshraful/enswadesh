<?php

namespace App\Http\Controllers\Backend\General\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\General\InteractionRepository;

class InteractionController extends Controller
{
    public $interactionRepo;

    public function __construct(InteractionRepository $interactionRepository)
    {
        $this->interactionRepo = $interactionRepository;
    }

    public function videos()
    {
        $videos = $this->interactionRepo->getInteractionByCategoryID(1);
        return view('backend.general.video.index',compact('videos'));
    }

    public function templates()
    {
        $templates = $this->interactionRepo->getInteractionByCategoryID(2);
        return view('backend.general.template.index',compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statusUpdate(Request $request, $id)
    {
        $this->interactionRepo->updateByID($id, $request->all());
        notify()->success('Order Status Successfully Updated.', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
