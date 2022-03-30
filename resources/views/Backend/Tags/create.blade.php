
@extends('Backend.layouts.master')
@section('page_title',' Tags')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tags</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tags</li>
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
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Create Tags</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Name
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" required placeholder="Enter Name"
                                            class="form-control   @error('name') is-invalid @enderror"
                                            value="{{old('name','')}}" />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Slug
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="slug" required placeholder="Enter Slug"
                                            class="form-control @error('slug') is-invalid @enderror"
                                            value="{{old('slug','')}}" />
                                        @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Description
                                        </label>
                                        <div class="col-sm-9">
                                             <textarea type="text" name="description"
                                            class="ckeditor form-control" placeholder="Enter Department Description"
                                           >{{old('description','')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Featured Image
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image_file"
                                            class="form-control @error('image_file') is-invalid @enderror"
                                            value="{{old('image_file','')}}" />
                                        </div>
                                    </div>



                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Submit</button>
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
