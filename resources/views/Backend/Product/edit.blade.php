
@extends('Backend.layouts.master')
@section('page_title',' Product')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Product</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" class="form-control" value="{{Auth::user()->id}}" required readonly
                                name="recorded_by" />
                                <div class="card-body">
                                    <h4 class="card-title">Edit Product</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Product Name
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_name" required placeholder="Enter Name"
                                            class="form-control   @error('product_name') is-invalid @enderror"
                                            value="{{old('product_name',$product->product_name)}}" />
                                        @error('product_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Category
                                            <span class="required text-danger"> * </span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2 @error('category_id') is-invalid @enderror"
                                                name="category_id[]" multiple="multiple" required style="width: 100%;"
                                                data-dropdown-css-class="select2-info">
                                                @php
                                            $productcat = [];
                                        @endphp
                                        @foreach ($product->cat as $cate)
                                        @php
                                            array_push($productcat,$cate->name);
                                        @endphp

                                        @endforeach
                                        <option disabled selected>
                                         {{implode(',',$productcat)}}
                                                </option>
                                                <option class="bg-info" disabled>Select Categories...</option>
                                            @foreach ($category as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                            @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">SubCategory
                                            <span class="required text-danger"> * </span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2 @error('sub_category_id') is-invalid @enderror"
                                                name="sub_category_id[]" multiple="multiple" required style="width: 100%;"
                                                data-dropdown-css-class="select2-info">
                                                @php
                                                $productsub = [];
                                            @endphp
                                            @foreach ($product->sub as $subcat)
                                            @php
                                                array_push($productsub,$subcat->name);
                                            @endphp

                                            @endforeach
                                                 <option disabled selected>

                                                    {{implode(',',$productsub)}}
                                                </option>
                                                <option class="bg-info" disabled>Select SubCategories...</option>
                                            @foreach ($subcategory as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach
                                            </select>
                                            @error('sub_category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Tag
                                            <span class="required text-danger"> * </span>
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 @error('tag_id') is-invalid @enderror"
                                            name="tag_id[]" multiple="multiple" required style="width: 100%;"
                                            data-dropdown-css-class="select2-info">
                                             @php
                                            $producttag = [];
                                        @endphp
                                        @foreach ($product->tagg as $ta)
                                        @php
                                            array_push($producttag,$ta->name);
                                        @endphp

                                        @endforeach

                                             <option disabled selected>

                                                {{implode(',',$producttag)}}
                                            </option>
                                            <option class="bg-info" disabled>Select Tags....</option>
                                        @foreach ($tag as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                        </select>
                                        @error('tag_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Brand
                                            <span class="required text-danger"> * </span>
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('brand_id') is-invalid @enderror"
                                            name="brand_id">
                                            <option value="{{$product->brand_id}}" selected>{{$product->brandd['brand_name']}}
                                            <option class="bg-info" disabled>Select Brand....</option>
                                            @foreach ($brand as $bran)
                                            <option value="{{$bran->id}}">{{$bran->brand_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Product Description
                                            <span class="required text-danger"> * </span> </label>

                                        <div class="col-sm-9">
                                            <textarea type="text" name="description"
                                    class="ckeditor form-control @error('description') is-invalid @enderror"
                                   >{{old('description',$product->description)}}</textarea>
                                   @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{$message}}</strong>
                                   </span>
                                   @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Regular Price
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="regular_price" required placeholder="Enter Regular Price"
                                            class="form-control   @error('regular_price') is-invalid @enderror"
                                            value="{{old('regular_price',$product->regular_price)}}" />
                                        @error('regular_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Sales Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sales_price" required placeholder="Enter Sales Price"
                                            class="form-control"
                                            value="{{old('sales_price',$product->sales_price)}}" />
                                        @error('sales_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Short Description</label>

                                        <div class="col-sm-9">
                                            <textarea type="text" name="short_description"
                                    class="ckeditor form-control"
                                   >{{old('short_description',$product->short_description)}}</textarea>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Product Status
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('product_status') is-invalid @enderror" name="product_status">
                                                <option class="bg-info" disabled selected>Select Product Status....</option>
                                                <option value="Virtual" {{old('product_status')=='Virtual' ?'selected':''}} @if($product->product_status =='Virtual') selected @endif>Virtual
                                                </option>
                                                <option value="Downloadable" {{old('product_status')=='Downloadable' ?'selected':''}} @if($product->product_status == 'Downloadable') selected @endif>Downloadable
                                                </option>
                                            </select>
                                            @error('product_status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Image File
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="file_image"
                                            class="form-control"
                                            value="{{old('file_image','')}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Other Image
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="other_image"
                                            class="form-control"
                                            value="{{old('other_image','')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>

                </div>
                <!-- editor -->

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

        </div>


        @endsection
