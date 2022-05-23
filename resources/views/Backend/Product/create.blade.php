
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
                            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Create Product</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Product Name
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_name" required placeholder="Enter Name"
                                            class="form-control   @error('product_name') is-invalid @enderror"
                                            value="{{old('product_name','')}}" />
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
                                            <select class="form-control @error('category_id') is-invalid @enderror"
                                            name="category_id">
                                            <option class="bg-info" disabled selected>Select Category....</option>
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
                                        <label class="col-sm-3 text-right control-label col-form-label">Tag
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('tag_id') is-invalid @enderror"
                                            name="tag_id">
                                            <option class="bg-info" disabled selected>Select Tag....</option>
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
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('brand_id') is-invalid @enderror"
                                            name="brand_id">
                                            <option class="bg-info" disabled selected>Select Brand....</option>
                                            @foreach ($brand as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
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
                                   >{{old('description','')}}</textarea>
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
                                            value="{{old('regular_price','')}}" />
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
                                            value="{{old('sales_price','')}}" />
                                        @error('sales_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Product Status
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('product_status') is-invalid @enderror" name="parent_category">
                                                <option class="bg-info" disabled selected>Select Product Status....</option>
                                                <option value="Virtual" {{old('product_status')=='Virtual' ?'selected':''}}>Virtual
                                                </option>
                                                <option value="Downloadable" {{old('product_status')=='Downloadable' ?'selected':''}}>Downloadable
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
                                        <label class="col-sm-3 text-right control-label col-form-label">Short Description
                                            <span class="required text-danger"> * </span> </label>

                                        <div class="col-sm-9">
                                            <textarea type="text" name="short_description"
                                    class="ckeditor form-control"
                                   >{{old('short_description','')}}</textarea>

                                        </div>
                                    </div>



                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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