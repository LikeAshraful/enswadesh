<?php

namespace App\Http\Controllers\Backend\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\General\TutorialRepository;

class TutorialController extends Controller
{
    protected $tutorialRepo;

    public function __construct(TutorialRepository $tutorialRepository)
    {
        $this->tutorialRepo = $tutorialRepository;
    }

    public function index()
    {
        Gate::authorize('backend.menus.index');
        $tutorials = $this->tutorialRepo->getAll();
        return view('backend.general.tutorial.index', compact('tutorials'));
    }

    public function create()
    {
        Gate::authorize('backend.menus.create');
        $tutorials = $this->tutorialRepo->getAll();
        return view('backend.general.tutorial.form', compact('tutorials'));
    }

    public function store(Request $request)
    {
        $this->tutorialRepo->create($request->all());
        return redirect()->route('backend.tutorial.index');
        notify()->success("Tutorial Successfully created", "Created");
    }

    public function edit($id)
    {
        Gate::authorize('backend.menus.edit');
        $tutorial       = $this->tutorialRepo->findByID($id);
        return view('backend.general.tutorial.form', compact('tutorial'));
    }

    public function update(Request $request, $id)
    {
        $this->tutorialRepo->findByID($id);
        $this->tutorialRepo->updateByID($id, $request->all());
        return redirect()->route('backend.tutorial.index');
        notify()->success("Tutorial Successfully updated", "Updated");
    }

    public function destroy($id)
    {
        Gate::authorize('backend.menus.destroy');
        $this->tutorialRepo->deletedByID($id);
        notify()->success("Tutorial Successfully Deleted", "Deleted");
        return back();
    }
}
