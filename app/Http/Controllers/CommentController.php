<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Comment::orderBy('id', 'DESC')->get();
        return view('Backend.Comment.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::all();
        $comment = Comment::all();
        return view('Backend.Comment.create',compact('post','comment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment_done'=> 'required',
            'post_id' => 'required',
            'submitted_on' => 'required',
        ]);
        $input = $request->all();
        $comment = Comment::create($input);
        return redirect()->route('comment.index')
            ->with('success', 'Comment Created Successfully !!!',compact('comment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('Backend.Comment.show',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::all();
        $comment = Comment::find($id);

        return view('Backend.Comment.edit',compact('comment','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'comment_done'=> 'required',
            'post_id' => 'required',
            'submitted_on' => 'required',
        ]);
        $input = $request->all();
        $comment = Comment::findOrfail($id);
        $comment->update($input);

        return redirect()->route('comment.index')
            ->with('success', 'Selected Comment Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id)->delete();
        return redirect()->route('comment.index')->with('success','Selected Comment Deleted Successfully!!!',compact('comment'));
    }
}
