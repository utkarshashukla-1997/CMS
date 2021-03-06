
@extends('Backend.layouts.master')
@section('page_title','Brand')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Brand</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Brand</li>
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
                                    <h4 class="card-title">Brand Details</h4>
                                    <a href="{{ route('brand.index') }}" class="btn btn-success float-right">Back
                                    </a>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Brand Name:</strong>
                                        <div class="col-md-9">
                                           {{$brand->brand_name}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Slug:</strong>
                                        <div class="col-md-9">
                                           {{$brand->slug}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Logo:</strong>
                                        <div class="col-md-9">
                                            <td> <a href="{{asset('Uploads/Brand/Logo/'.$brand->brand_logo)}}"
                                                target="_blank">
                                            <img src="{{ asset('Uploads/Brand/Logo/'.$brand->brand_logo) }}" alt="" width="200px">
                                            {{$brand->brand_logo}}</a><br></td>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Brand Description:</strong>
                                        <div class="col-md-9">
                                          {!!$brand->brand_description!!}

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
