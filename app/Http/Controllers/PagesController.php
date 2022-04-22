<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Pages;
use App\Models\Tags;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:page-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:page-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:page-delete', ['only' => ['destroy']]);
    }
     public function index(Request $request)
    {
        $data = Pages::orderBy('id', 'DESC')->get();
        return view('Backend.Page.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        $tag = Tags::all();
        $page = Pages::all();
        return view('Backend.Page.create',compact('category','tag','page'));
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
            'done_date'=> 'required'
        ]);
        $input = $request->all();
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $featured_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Page/File/', $featured_image);

            $request->featured_image = $featured_image;
            $input['featured_image'] = $featured_image;
        }
        $page = Pages::create($input);
        return redirect()->route('page.index')
            ->with('success', 'Page Created Successfully !!!',compact('page'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Pages::find($id);
        return view('Backend.Page.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::all();
        $tag = Tags::all();
        $page = Pages::find($id);
        return view('Backend.Page.edit',compact('category','tag','page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=> 'required',
            'permalink' => 'required',
            'template' => 'required',
            'visibility_post' => 'required',
            'done_date'=> 'required'
        ]);
        $input = $request->all();
        // dd($input);
        $page = Pages::findOrFail($id);
        if ($request->featured_image != '') {
            $path = public_path() . '/Uploads/Page/File/';
            //code for remove old file
            if ($page->featured_image != ''  && $page->featured_image != null) {
                $file_old = $path . $page->featured_image;
                unlink($file_old);
            }
            if ($request->hasFile('featured_image')) {
                $image = $request->file('featured_image');
                $featured_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Page/File', $featured_image);

                $request->featured_image = $featured_image;
                $input['featured_image'] = $featured_image;
            }
        }

            $page->update($input);

        return redirect()->route('page.index')
            ->with('success', 'Selected Page Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Pages::find($id)->delete();
        return redirect()->route('page.index')
        ->with('success','Selected Page Deleted Successfully',compact('post'));
    }
}
