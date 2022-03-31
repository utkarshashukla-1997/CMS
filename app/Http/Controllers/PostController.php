<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Tags;
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
        $tag = Tags::all();
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
        if ($request->hasFile('file_image')) {
            $image = $request->file('file_image');
            $file_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Post/File/', $file_image);

            $request->file_image = $file_image;
            $input['file_image'] = $file_image;
        }

        $post = Post::create($input);
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
        return view('Backend.Media.show',compact('post'));
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
      $tag = Tags::all();
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
        // dd($input);
        $post = Post::findOrFail($id);
        if ($request->file_image != '') {
            $path = public_path() . '/Uploads/Post/File/';
            //code for remove old file
            if ($post->image_file != ''  && $post->image_file != null) {
                $file_old = $path . $post->image_file;
                unlink($file_old);
            }
            if ($request->hasFile('image_file')) {
                $image = $request->file('image_file');
                $image_file = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Post/File', $image_file);

                $request->image_file = $image_file;
                $input['image_file'] = $image_file;
            }
        }

            $post->update($input);

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
