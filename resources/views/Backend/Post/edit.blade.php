
@extends('Backend.layouts.master')
@section('page_title',' Post')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Post</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Post</li>
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
                            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Create Post</h4>
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
                                        <label class="col-sm-3 text-right control-label col-form-label">Description
                                        <div class="col-sm-9">
                                            <textarea type="text" name="description"
                                            class="ckeditor form-control"
                                           >{{old('description','')}}</textarea>

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
                                        <label class="col-sm-3 text-right control-label col-form-label">Author
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="user_id" required placeholder="Enter Permalink"
                                            class="form-control   @error('user_id') is-invalid @enderror"
                                            value="{{old('user_id','')}}" />
                                        @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Category
                                        </label>
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
                                        <label class="col-sm-3 text-right control-label col-form-label">Tags
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
                                        <label class="col-sm-3 text-right control-label col-form-label"> Published Date
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="date" name="published_date" required placeholder="Enter Permalink"
                                            class="form-control   @error('published_date') is-invalid @enderror"
                                            value="{{old('published_date','')}}" />
                                        @error('published_date')
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
                                            <input type="file" name="file_image"
                                            class="form-control"
                                            value="{{old('file_image','')}}" />
                                        </div>
                                    </div>
                                    <!--Hidden Values-->
                                    <input type="hidden" class="form-control" value="Draft" required readonly name="status" />
                                <input type="hidden" class="form-control" value="{{Auth::user()->id}}" required readonly name="status" />

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
