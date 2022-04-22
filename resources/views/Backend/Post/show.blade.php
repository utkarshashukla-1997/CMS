
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
                                    <div class="form-group row">
                                        <strong>Title:</strong>
                                           {{$post->title}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Description:</strong>
                                           {!!$post->description!!}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Permalink:</strong>
                                        {{$post->permalink}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Template:</strong>
                                        {{$post->template}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Visibility Post:</strong>
                                        {{$post->visibility_post}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Published Date:</strong>
                                        {{$post->published_date}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Author:</strong>
                                        {{$post->usr['name']}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Post:</strong>
                                        <td> <a href="{{asset('Uploads/Post/File/'.$post->featured_image)}}"
                                            target="_blank">
                                        <img src="{{ asset('Uploads/Post/File/'.$post->featured_image) }}" alt="" width="200px">
                                        {{$post->featured_image}}</a><br></td>

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
