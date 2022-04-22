
@extends('Backend.layouts.master')
@section('page_title',' Page')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Page</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Page</li>
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
                            <form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Create Page</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Title
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" required placeholder="Enter Title"
                                            class="form-control   @error('title') is-invalid @enderror"
                                            value="{{old('title','')}}" />
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Content</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="content"
                                            class="ckeditor form-control"
                                           >{{old('content','')}}</textarea>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Permalink
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="permalink" required placeholder="Enter Permalink"
                                            class="form-control   @error('permalink') is-invalid @enderror"
                                            value="{{old('permalink','')}}" />
                                        @error('permalink')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Template
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="template" required placeholder="Enter Template"
                                            class="form-control   @error('template') is-invalid @enderror"
                                            value="{{old('template','')}}" />
                                        @error('template')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Visibility Post
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="visibility_post" required placeholder="Visibility Post"
                                            class="form-control   @error('visibility_post') is-invalid @enderror"
                                            value="{{old('visibility_post','')}}" />
                                        @error('visibility_post')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Published Date
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="date" name="done_date" required placeholder="Enter Permalink"
                                            class="form-control   @error('done_date') is-invalid @enderror"
                                            value="{{old('done_date','')}}" />
                                        @error('done_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Featured Image
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="featured_image"
                                            class="form-control"
                                            value="{{old('featured_image','')}}" />
                                        </div>
                                    </div>
                                    <!--Hidden Values-->
                                    <input type="hidden" class="form-control" value="Draft" required readonly name="status" />
                                <input type="hidden" class="form-control" value="{{Auth::user()->id}}" required readonly name="status" />
                                <input type="hidden" class="form-control" value="{{Auth::user()->id}}" required readonly name="user_id" />

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
