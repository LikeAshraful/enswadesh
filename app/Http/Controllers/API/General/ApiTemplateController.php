<?php

namespace App\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Repository\General\TemplateRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\General\TemplateResource;

class ApiTemplateController extends Controller
{
    use JsonResponseTrait;

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
        $allTemplate = $this->templateRepo->getAll();
        return $this->json(
            'Template list',
            TemplateResource::collection($allTemplate)
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $template = $this->templateRepo->create($request->except(['slug','thumbnail','created_by']) + [
            'slug'          => isset($request->slug) ? $request->slug : str_slug($request->title, '-'),
            'thumbnail'          => isset($file) ? $file : '',
            'created_by' => Auth::id()
        ]);

        return $this->json(
            "Tempalte Created Sucessfully",
            $template
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $template = $this->templateRepo->findOrFailByID($id);
        return $this->json(
            "Template",
            new TemplateResource($template)
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
