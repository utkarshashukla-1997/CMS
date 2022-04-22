
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
                        <h4 class="page-title">Category</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                                    <h4 class="card-title">Category Details</h4>
                                    <a href="{{ route('category.index') }}" class="btn btn-success float-right">Back
                                    </a>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Name:</strong>
                                        <div class="col-md-9">
                                           {{$category->name}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Slug:</strong>
                                        <div class="col-md-6">
                                           {{$category->slug}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Parent Category:</strong>
                                        <div class="col-md-6">
                                           {{$category->parent_category}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Description:</strong>
                                        <div class="col-md-6">
                                           {!!$category->description!!}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Featured Image:</strong>
                                        <div class="col-md-6">
                                        @if($category->image_file!=[])
                                        <a href="{{asset('Uploads/Category/File/'.$category->image_file)}}"
                                            target="_blank">
                                        <img src="{{ asset('Uploads/Category/File/'.$category->image_file) }}" alt="" width="200px">
                                        {{$category->image_file}}</a><br>
                                        @else
                                        N/A
                                        @endif
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
