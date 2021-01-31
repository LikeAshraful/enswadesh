<?php

namespace App\Http\Controllers\Backend\Interaction;

use Illuminate\Http\Request;
use App\Models\Interaction\Comment;
use App\Http\Controllers\Controller;
use Repository\Interaction\CommentRepository;
use Repository\Interaction\InteractionRepository;

class CommentController extends Controller
{
    public $commentRepo;
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepo = $commentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = $this->commentRepo->getAll();
        return view('backend.interaction.comment.index', compact('comments'));
    }

    public function changeStatus(Request $request){
        $comment = Comment::find($request->id);
        $comment =  $comment->update($request->except('status') + ['status' => $request->status]);
        return response()->json($comment);
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
        //
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

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->commentRepo->deleteComment($id);
        notify()->success('Comment Successfully Deleted.', 'Deleted');
        return redirect()->back();
    }
}
