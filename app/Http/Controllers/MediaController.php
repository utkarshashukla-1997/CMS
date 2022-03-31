<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:media-list|media-create|media-edit|media-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:media-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:media-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:media-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Media::orderBy('id', 'DESC')->get();
        return view('Backend.Media.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $media = Media::all();
        $d = Carbon::now();
        return view('Backend.Media.create',compact('media','d'));
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
            'uploaded_date'=> 'required',
        ]);
        $input = $request->all();
        if ($request->hasFile('media_file')) {
            $image = $request->file('media_file');
            $media_file = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Media/File/', $media_file);

            $request->media_file = $media_file;
            $input['media_file'] = $media_file;
        }

        $media = Media::create($input);
        return redirect()->route('media.index')
            ->with('success', 'Media Created Successfully !!!',compact('media'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media = Media::find($id);
        return view('Backend.Media.show',compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::find($id);
        $d = Carbon::now();
        return view('Backend.Media.edit',compact('media','d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'uploaded_date'=> 'required',
        ]);
        $input = $request->all();
        // dd($input);
        $media = Media::findOrFail($id);
        if ($request->media_file != '') {
            $path = public_path() . '/Uploads/Media/File/';
            //code for remove old file
            if ($media->media_file != ''  && $media->media_file != null) {
                $file_old = $path . $media->media_file;
                unlink($file_old);
            }
            if ($request->hasFile('media_file')) {
                $image = $request->file('media_file');
                $media_file = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Media/File', $media_file);

                $request->media_file = $media_file;
                $input['media_file'] = $media_file;
            }
        }

            $media->update($input);
            return redirect()->route('media.index')
            ->with('success', 'Selected Media File Updated Successfully !!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::find($id)->delete();
        return redirect()->route('media.index')->with('success','Selected Media File Deleted Successfully',compact('media'));
    }
}
