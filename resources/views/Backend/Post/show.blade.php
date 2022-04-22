
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

                                <div class="card-body">
                                    <h4 class="card-title">Post Details</h4>
                                    <a href="{{ route('category.index') }}" class="btn btn-success float-right">Back
                                    </a>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Title:</strong>
                                        <div class="col-md-9">
                                           {{$post->title}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Description:</strong>
                                        <div class="col-md-9">
                                           {!!$post->description!!}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Permalink:</strong>
                                        <div class="col-md-9">
                                        {{$post->permalink}}

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Template:</strong>
                                        <div class="col-md-9">
                                        {{$post->template}}

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Visibility Post:</strong>
                                        <div class="col-md-9">
                                        {{$post->visibility_post}}

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Published Date:</strong>
                                        <div class="col-md-9">
                                        {{$post->published_date}}

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Author:</strong>
                                        <div class="col-md-9">
                                        {{$post->usr['name']}}

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Post:</strong>
                                        <div class="col-md-9">
                                        <a href="{{asset('Uploads/Post/File/'.$post->featured_image)}}"
                                            target="_blank">
                                        <img src="{{ asset('Uploads/Post/File/'.$post->featured_image) }}" alt="" width="200px">
                                        {{$post->featured_image}}</a><br>

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
