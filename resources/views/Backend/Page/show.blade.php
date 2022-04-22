
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

                                <div class="card-body">
                                    <h4 class="card-title">Page Details</h4>
                                    <a href="{{ route('page.index') }}" class="card-title btn btn-success float-right">Back
                                        </a>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Title:</strong>
                                         <div class="col-md-9">
                                           {{$page->title}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Content:</strong>
                                         <div class="col-md-9">
                                           {!!$page->content!!}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Permalink:</strong>
                                        <div class="col-md-9">
                                        {{$page->permalink}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Template:</strong>
                                        <div class="col-md-9">
                                        {{$page->template}}
                                     </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Visibility Post:</strong>
                                        <div class="col-md-9">
                                        {{$page->visibility_post}}

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Published Date:</strong>
                                        <div class="col-md-9">
                                        {{$page->done_date}}

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Author:</strong>
                                        <div class="col-md-9">
                                        {{$page->usr['name']}}
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Featured Image:</strong>
                                        <div class="col-md-9">
                                         <a href="{{asset('Uploads/Page/File/'.$page->featured_image)}}"
                                            target="_blank">
                                        <img src="{{ asset('Uploads/Page/File/'.$page->featured_image) }}" alt="" width="200px">
                                        {{$page->featured_image}}</a><br>

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
