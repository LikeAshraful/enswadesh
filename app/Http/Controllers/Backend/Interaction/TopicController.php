<?php

namespace App\Http\Controllers\Backend\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repository\Interaction\TopicRepository;

class TopicController extends Controller
{
    public $topicRepo;

    public function __construct(TopicRepository $topicRepository)
    {
        $this->topicRepo = $topicRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = $this->topicRepo->getAll();

        return view('backend.interaction.topic.index',compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.interaction.topic.form');
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
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png|max:500'
        ]);

        $image = $request->hasFile('thumbnail') ? $this->topicRepo->storeFile($request->file('thumbnail')) : '';

        $this->topicRepo->create($request->except(['thumbnail']) + [
            'thumbnail' => $image,
        ]);

        notify()->success('Topic Successfully Created.', 'Created');
        return redirect()->route('backend.topics.index');
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
        $topic = $this->topicRepo->findByID($id);
        return view('backend.interaction.topic.form',compact('topic'));
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
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png|max:500'
        ]);

        $topic = $this->topicRepo->findByID($id);

        $image = $request->hasFile('thumbnail') ? $this->topicRepo->storeFile($request->file('thumbnail')) : $topic->thumbnail;

        $this->topicRepo->updateByID($topic->id, $request->except(['thumbnail']) + [
            'thumbnail' => $image,
        ]);

        notify()->success('Topic Successfully Updated.', 'Updated');
        return redirect()->route('backend.topics.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->topicRepo->deleteTopic($id);
        notify()->success('Topic Successfully Deleted.', 'Deleted');
        return redirect()->back();
    }
}
