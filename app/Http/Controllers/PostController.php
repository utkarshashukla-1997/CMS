<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Post::orderBy('id', 'DESC')->get();
        return view('Backend.Post.index', compact('data'))
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
        $category = Categories::all();
        $tag = Tag::all();
        return view('Backend.Post.create',compact('post','category','tag'));
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
            'title'=> 'required',
            'permalink' => 'required',
            'template' => 'required',
            'visibility_post' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',
            'published_date'=> 'required'
        ]);
        $input = $request->all();
        $input['tag_id'] = $input['tag_id'][0];
        if ($request->hasFile('file_image')) {
            $image = $request->file('file_image');
            $file_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Post/File/', $file_image);

            $request->file_image = $file_image;
            $input['file_image'] = $file_image;
        }

        $post = Post::create($input);
        $post->tagg()->sync($request->tag_id);
        return redirect()->route('post.index')
            ->with('success', 'Post Created Successfully !!!',compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);
        return view('Backend.Post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category = Categories::all();
      $tag = Tag::all();
      $post = Post::find($id);
      return view('Backend.Post.edit',compact('category','post','tag'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=> 'required',
            'permalink' => 'required',
            'template' => 'required',
            'visibility_post' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',
            'published_date'=> 'required'
        ]);
        $input = $request->all();
        $input['tag_id'] = $input['tag_id'][0];
        // dd($input);
        $post = Post::findOrFail($id);


        if ($request->file_image != '') {
            $path = public_path() . '/Uploads/Post/File/';
            //code for remove old file
            if ($post->file_image != ''  && $post->file_image != null) {
                $file_old = $path . $post->file_image;
                unlink($file_old);
            }
            if ($request->hasFile('file_image')) {
                $image = $request->file('file_image');
                $file_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Post/File', $file_image);

                $request->file_image = $file_image;
                $input['file_image'] = $file_image;
            }
        }

            $post->update($input);
            $post->tagg()->sync($request->tag_id);

        return redirect()->route('post.index')
            ->with('success', 'Selected Post Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id)->delete();
         return redirect()->route('post.index')
         ->with('success','Selected Post Deleted Successfully',compact('post'));
    }
}
