<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:subcategory-list|subcategory-create|subcategory-edit|subcategory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:subcategory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:subcategory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:subcategory-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = SubCategory::orderBy('id', 'DESC')->get();
        return view('Backend.SubCategory.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory = SubCategory::all();
        $category = Categories::all();
        return view('Backend.SubCategory.create',compact('subcategory','category'));
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
            'category_id'=> 'required',
        ]);
        $input = $request->all();
        $subcategory = new SubCategory();
        $subcategory->name = $input['name'];
        $subcategory->slug = Str::slug($input['name']);
        $subcategory->category_id = $input['category_id'];
        $subcategory->description = $input['description'];
        if ($request->hasFile('image_file')) {
            $image = $request->file('image_file');
            $image_file = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/SubCategory/File/', $image_file);

            $request->image_file = $image_file;
            $input['image_file'] = $image_file;
        }

        $subcategory->save();
        return redirect()->route('subcategory.index')
            ->with('success', 'Category Created Successfully !!!',compact('subcategory'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::find($id);
        return view('Backend.SubCategory.show',compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategory::find($id);
        return view('Backend.SubCategory.edit',compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required',

            'category_id'=> 'required',
        ]);
        $input = $request->all();
        // dd($input);
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->name = $input['name'];
        $subcategory->slug = Str::slug($input['name']);
        $subcategory->parent_category = $input['category_id'];
        $subcategory->description = $input['description'];
        if ($request->image_file != '') {
            $path = public_path() . '/Uploads/SubCategory/File/';
            //code for remove old file
            if ($subcategory->image_file != ''  && $subcategory->image_file != null) {
                $file_old = $path . $subcategory->image_file;
                unlink($file_old);
            }
            if ($request->hasFile('image_file')) {
                $image = $request->file('image_file');
                $image_file = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/SubCategory/File', $image_file);

                $request->image_file = $image_file;
                $input['image_file'] = $image_file;
            }
        }

            $subcategory->save();

        return redirect()->route('subcategory.index')
            ->with('success', 'Selected Category Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::find($id)->delete();
        return redirect()->route('subcategory.index')
            ->with('success', 'Selected Category has been Deleted Successfully !!!');
    }
}
