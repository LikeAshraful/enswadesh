<?php

namespace App\Http\Controllers\Backend\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Repository\General\TemplateRepository;

class TemplateController extends Controller
{
    public $templateRepo;

    public function __construct(TemplateRepository $templateRepository)
    {
        $this->templateRepo = $templateRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = $this->templateRepo->getAll();

        return view('backend.general.template.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.general.template.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $file = Storage::put('/uploads/template', $request->file('image'));
        }

        $this->templateRepo->create($request->except(['slug','thumbnail','created_by']) + [
            'slug'          => isset($request->slug) ? $request->slug : str_slug($request->title, '-'),
            'thumbnail'          => isset($file) ? $file : '',
            'created_by' => Auth::id()
        ]);

        notify()->success('Template Successfully Added.', 'Added');
        return redirect()->route('backend.templates.index');

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
        $template = $this->templateRepo->findByID($id);
        return view('backend.general.template.form', compact('template'));
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
        $template = $this->templateRepo->findOrFailByID($id);

        if($request->hasFile('image')){
            $file = Storage::put('/uploads/template', $request->file('image'));
        }

        $this->templateRepo->updateByID($id, $request->except(['slug','thumbnail','updated_by']) +[
            'slug'          => isset($request->slug) ? $request->slug : str_slug($request->title, '-'),
            'thumbnail'     =>  isset($file) ? $file : $template->thumbnail,
            'updated_by' => Auth::id()
         ]);

        notify()->success('Template Successfully Updated.', 'Updated');
        return redirect()->route('backend.templates.index');

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
