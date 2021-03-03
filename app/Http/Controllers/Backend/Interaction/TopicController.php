<?php

namespace App\Http\Controllers\Backend\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\Interaction\TopicRepository;

class TopicController extends Controller
{
    public $topicRepo;

    public function __construct(TopicRepository $topicRepository)
    {
        $this->topicRepo = $topicRepository;
    }

    public function index()
    {
        Gate::authorize('backend.topics.index');
        $topics = $this->topicRepo->getAll();
        return view('backend.interaction.topic.index',compact('topics'));
    }

    public function create()
    {
        Gate::authorize('backend.topics.create');
        return view('backend.interaction.topic.form');
    }

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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        Gate::authorize('backend.topics.edit');
        $topic = $this->topicRepo->findByID($id);
        return view('backend.interaction.topic.form',compact('topic'));
    }

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

    public function destroy($id)
    {
        Gate::authorize('backend.topics.destroy');
        $this->topicRepo->deleteTopic($id);
        notify()->success('Topic Successfully Deleted.', 'Deleted');
        return redirect()->back();
    }
}
