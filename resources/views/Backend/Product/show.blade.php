
@extends('Backend.layouts.master')
@section('page_title',' Category')
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

                                <div class="card-body">
                                    <h4 class="card-title">Product Details</h4>
                                    <a href="{{ route('product.index') }}" class="btn btn-success float-right">Back
                                    </a>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Product Name:</strong>
                                        <div class="col-md-9">
                                           {{$product->product_name}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Category:</strong>
                                        <div class="col-md-6">
                                            @php
                                            $productcat = [];
                                        @endphp
                                        @foreach ($product->cat as $cate)
                                        @php
                                            array_push($productcat,$cate->name);
                                        @endphp

                                        @endforeach
                                         {{implode(',',$productcat)}} &nbsp;
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Sub Category:</strong>
                                        <div class="col-md-6">
                                            @php
                                            $productsub = [];
                                        @endphp
                                        @foreach ($product->sub as $subcat)
                                        @php
                                            array_push($productsub,$subcat->name);
                                        @endphp

                                        @endforeach
                                         {{implode(',',$productsub)}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Tag:</strong>
                                        <div class="col-md-6">
                                            @php
                                            $producttag = [];
                                        @endphp
                                        @foreach ($product->tagg as $ta)
                                        @php
                                            array_push($producttag,$ta->name);
                                        @endphp

                                        @endforeach
                                         {{implode(',',$producttag)}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Brand:</strong>
                                        <div class="col-md-6">
                                        {{$product->brandd['brand_name']}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Product Description:</strong>
                                        <div class="col-md-6">
                                        {!!$product->description!!}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Regular Price:</strong>
                                        <div class="col-md-6">
                                         {{$product->regular_price}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Sales Price:</strong>
                                        <div class="col-md-6">
                                         {{$product->sales_price}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Product Status:</strong>
                                        <div class="col-md-6">
                                          {!!$product->product_status!!}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Short Description:</strong>
                                        <div class="col-md-6">
                                         {!!$product->short_description!!}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Capacity/Size:</strong>
                                        <div class="col-md-6">
                                         {{$product->capacity_size}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Image File:</strong>
                                        <div class="col-md-6">
                                            <a href="{{asset('Uploads/Product/File/'.$product->file_image)}}"
                                                target="_blank">
                                            <img src="{{ asset('Uploads/Product/File/'.$product->file_image) }}" alt="" width="200px">
                                            {{$product->file_image}}</a><br>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Other File:</strong>
                                        <div class="col-md-6">
                                            <a href="{{asset('Uploads/Product/File/'.$product->file_image)}}"
                                                target="_blank">
                                            <img src="{{ asset('Uploads/Product/File/'.$product->file_image) }}" alt="" width="200px">
                                            {{$product->file_image}}</a><br>
                                    </div>
                                    </div>
                                </div>





                                </div>

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
