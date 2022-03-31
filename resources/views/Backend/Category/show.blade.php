
@extends('Backend.layouts.master')
@section('page_title',' User')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                                        <strong>Name:</strong>
                                           {{$category->name}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Slug:</strong>
                                           {{$category->slug}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Parent Category:</strong>
                                           {{$category->parent_category}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Description:</strong>
                                           {!!$category->description!!}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Featured Image:</strong>
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
