<?php

namespace App\Http\Controllers\Backend\General;

use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\General\VideoRepository;

class VideoController extends Controller
{

    public $videoRepo;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepo = $videoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = $this->videoRepo->getAll();
        return view('backend.general.video.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.general.video.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($image = $request->image) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/video/' . $filename);
            Image::make($image)->resize(250, 250)->save($location);
        }

        $this->videoRepo->create([
            'title'          => $request->title,
            'description'   => $request->description,
            'slug'          => isset($request->slug) ? $request->slug : str_slug($request->title, '-'),
            'thumbnail'          => isset($filename) ? $filename : '',
            'video_url' => $request->url,
            'created_by' => Auth::id()
        ]);
        notify()->success('Video Successfully Added.', 'Added');
        return redirect()->route('backend.videos.index');
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
        $video = $this->videoRepo->findByID($id);
        return view('backend.general.video.form', compact('video'));
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
        $video = $this->videoRepo->findOrFailByID($id);

        if($image = $request->image) {
            $filename = rand(10, 100) . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/uploads/video/' . $filename);
            Image::make($image)->resize(250, 250)->save($location);
        }

        $this->videoRepo->updateByID($id, [
            'title'         => $request->title,
            'description'   => $request->description,
            'slug'          => isset($request->slug) ? $request->slug : str_slug($request->title, '-'),
            'thumbnail'     =>  isset($filename) ? $filename : $video->thumbnail,
            'video_url' => $request->url,
            'updated_by' => Auth::id()
         ]);

        notify()->success('Video Successfully Updated.', 'Updated');
        return redirect()->route('backend.videos.index');
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
