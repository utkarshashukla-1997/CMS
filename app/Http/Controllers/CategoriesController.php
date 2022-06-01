<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Category::orderBy('id', 'DESC')->get();
        return view('Backend.Category.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('Backend.Category.create',compact('category'));
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
            'parent_category'=> 'required',
        ]);
        $input = $request->all();
        $category = new Category();
       $category->name = $input['name'];
      $category->slug = Str::slug($input['name']);
      $category->parent_category = $input['parent_category'];
      $category->description = $input['description'];
  if ($request->hasFile('image_file')) {
    $image = $request->file('image_file');
    $image_file = "TD-" . time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path() . '/Uploads/Category/File/', $image_file);

    $category->image_file = $image_file;
    $input['image_file'] = $image_file;
}

        $category->save();
       return redirect()->route('category.index')->with('success','Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('Backend.Category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrfail($id);
        return view('Backend.Category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required',
            'parent_category'=> 'required',
        ]);
        $input = $request->all();
        // dd($input);
        $category = Category::findOrfail($id);
        $category->name = $input['name'];
        $category->slug = Str::slug($input['name']);
        $category->parent_category = $input['parent_category'];
        $category->description = $input['description'];
        if ($request->image_file != '') {
            $path = public_path() . '/Uploads/Category/File/';
            //code for remove old file
            if ($category->image_file != ''  && $category->image_file != null) {
                $file_old = $path . $category->image_file;
                unlink($file_old);
            }
            if ($request->hasFile('image_file')) {
                $image = $request->file('image_file');
                $image_file = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Category/File', $image_file);

                $category->image_file = $image_file;
                $input['image_file'] = $image_file;
            }
        }

            $category->save($input);

        return redirect()->route('category.index')
            ->with('success', 'Selected Category Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index')
            ->with('success', 'Selected Category has been Deleted Successfully !!!');
    }
}
