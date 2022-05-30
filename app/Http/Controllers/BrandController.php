<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:brand-list|brand-create|brand-edit|brand-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:brand-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:brand-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:brand-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Brand::orderBy('id', 'DESC')->get();
        return view('Backend.Brand.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('Backend.Brand.create',compact('brand'));
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
            'brand_name' => 'required',
        ]);
        $input = $request->all();
        $brand = new Brand();
        $brand->brand_name = $input['brand_name'];
        $brand->slug = Str::slug($input['brand_name']);
        $brand->brand_description = $input['brand_description'];
        if ($request->hasFile('brand_logo')) {
            $image = $request->file('brand_logo');
            $brand_logo = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Brand/Logo/', $brand_logo);

            $brand->brand_logo = $brand_logo;
            $input['brand_logo'] = $brand_logo;
        }
        $brand->save();

        return redirect()->route('brand.index')
            ->with('success', 'New Brand Created Successfully !!!', compact('brand'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::findOrfail($id);
        return view('Backend.Brand.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::findOrfail($id);
        return view('Backend.Brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'brand_name' => 'required',

        ]);

        $input = $request->all();
        $brand = Brand::find($id);
        $brand->brand_name = $input['brand_name'];
        $brand->slug = Str::slug($input['brand_name']);
        $brand->brand_description = $input['brand_description'];
        $brand->update($input);
        if ($request->file_image != '') {
            $path = public_path() . '/Uploads/Brand/Logo/';
            //code for remove old file
            if ($brand->brand_logo != ''  && $brand->brand_logo != null) {
                $file_old = $path . $brand->brand_logo;
                unlink($file_old);
            }
            if ($request->hasFile('brand_logo')) {
                $image = $request->file('brand_logo');
                $brand_logo = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Brand/Logo', $brand_logo);

                $brand->brand_logo = $brand_logo;
                $input['brand_logo'] = $brand_logo;
            }
        }
        $brand->update($input);
        return redirect()->route('brand.index')
            ->with('success', 'Selected Brand Details Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $brand = Brand::find($id)->delete();
        return redirect()->route('brand.index')->with('success','Selected Brand Deleted Successfully!!!',compact('brand'));
    }
}
