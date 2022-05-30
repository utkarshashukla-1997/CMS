<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Tag;
use App\Models\SubCategory;
use App\Models\Brand;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:order-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Product::orderBy('id', 'DESC')->get();
        return view('Backend.Product.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $category = Categories::all();
        $tag = Tag::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        return view('Backend.Product.create',compact('product','category','tag','subcategory','brand'));
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
            'product_name' => 'required',
            'category_id' => 'required',
            'subcategory_id'=> 'required',
            'tag_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
             'regular_price' => 'required',
             'product_status' => 'required',

        ]);
        $input = $request->all();
        $product = new Product();
        $product->name = $input['name'];
        $product->slug = Str::slug($input['name']);
        $product->category_id = $input['category_id'][0];
        $product->subcategory_id = $input['subcategory'][0];
        $product->tag_id = $input['tag_id'][0];
        $product->brand_id = $input['brand_id'];
        $product->description = $input['description'];
        $product->regular_price = $input['regular_price'];
        $product->sales_price = $input['sales_price'];
        $product->short_description = $input['short_description'];
        $product->product_status = $input['product_status'];

        if ($request->hasFile('file_image')) {
            $image = $request->file('file_image');
            $file_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Product/File/', $file_image);

            $product->file_image = $file_image;
            $input['file_image'] = $file_image;
        }
        if ($request->hasFile('other_image')) {
            $image = $request->file('other_image');
            $other_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Product/File/', $other_image);

            $product->other_image = $other_image;
            $input['other_image'] = $other_image;
        }
        $product->save();
        $product->cat()->sync($request->category_id);
        $product->tagg()->sync($request->tag_id);
        return redirect()->route('product.index')
            ->with('success', 'New Product Created Successfully !!!', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrfail($id);
        return view('Backend.Product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrfail($id);
        $category = Categories::all();
        $tag = Tag::all();
        $subcategory = SubCategory::all();
        $brand = Brand::all();
        return view('Backend.Product.edit',compact('product','category','tag','subcategory','brand'));
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
        $this->validate($request, [
            'order_no' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_address' => 'required',
            'customer_country' => 'required',
             'product' => 'required',
             'ordered_date' => 'required',
             'status' => 'required',
             'amount' => 'required'

        ]);
        $input = $request->all();
        $product = Product::findOrfail($id);
        $product->name = $input['name'];
        $product->slug = Str::slug($input['name']);
        $product->category_id = $input['category_id'][0];
        $product->tag_id = $input['tag_id'][0];
        $product->brand_id = $input['brand_id'];
        $product->description = $input['description'];
        $product->regular_price = $input['regular_price'];
        $product->sales_price = $input['sales_price'];
        $product->short_description = $input['short_description'];
        $product->product_status = $input['product_status'];
        $product->status = $input['status'];
        $product->amount = $input['amount'];
        if ($request->file_image != '') {
            $path = public_path() . '/Uploads/Product/File/';
            //code for remove old file
            if ($product->file_image != ''  && $product->file_image != null) {
                $file_old = $path . $product->file_image;
                unlink($file_old);
            }
            if ($request->hasFile('file_image')) {
                $image = $request->file('file_image');
                $file_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Product/File', $file_image);

                $product->file_image = $file_image;
                $input['file_image'] = $file_image;
            }
        }
        if ($request->other_image != '') {
            $path = public_path() . '/Uploads/Product/File/';
            //code for remove old file
            if ($product->other_image != ''  && $product->other_image != null) {
                $file_old = $path . $product->other_image;
                unlink($file_old);
            }
            if ($request->hasFile('other_image')) {
                $image = $request->file('other_image');
                $other_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Product/File', $other_image);

                $product->other_image = $other_image;
                $input['other_image'] = $other_image;
            }
        }
        $product->update($input);
        $product->tagg()->sync($request->tag_id);
        $product->tagg()->sync($request->category_id);
        return redirect()->route('product.index')
            ->with('success', 'New Product Created Successfully !!!', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
         return redirect()->route('product.index')
         ->with('success','Selected Product Deleted Successfully',compact('product'));
    }
}
