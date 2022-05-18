<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:tags-list|tags-create|tags-edit|tags-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:tags-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:tags-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:tags-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Tag::orderBy('id', 'DESC')->get();
        return view('Backend.Tags.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::all();
        return view('Backend.Tags.create',compact('tag'));
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
            'name'=> 'required',

        ]);
        $input = $request->all();
        $tag = new Tag();
        $tag->name = $input['name'];
        $tag->slug = Str::slug($input['name']);
        $tag->description = $input['description'];
        if ($request->hasFile('file_image')) {
            $image = $request->file('file_image');
            $file_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Tags/File/', $file_image);

            $tag->file_image = $file_image;
            $input['file_image'] = $file_image;
        }
        $tag->save();


        return redirect()->route('tag.index')
            ->with('success', 'Tags Created Successfully !!!',compact('tag'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        return view('Backend.Tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrfail($id);
        return view('Backend.Tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required',
        ]);
        $input = $request->all();
        // dd($input);
        $tag = Tag::findOrFail($id);
        $tag->name = $input['name'];
        $tag->slug = Str::slug($input['name']);
        $tag->description = $input['description'];
        if ($request->file_image != '') {
            $path = public_path() . '/Uploads/Tags/File/';
            //code for remove old file
            if ($tag->file_image != ''  && $tag->file_image != null) {
                $file_old = $path . $tag->file_image;
                unlink($file_old);
            }
            if ($request->hasFile('file_image')) {
                $image = $request->file('file_image');
                $file_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Tags/File', $file_image);

                $tag->file_image = $file_image;
                $input['file_image'] = $file_image;
            }
        }

            $tag->update($input);

        return redirect()->route('tag.index')
            ->with('success', 'Selected Tag Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::find($id)->delete();
        return redirect()->route('tag.index')->with('success','Selected Tag Deleted Successfully!!!');

    }
}
