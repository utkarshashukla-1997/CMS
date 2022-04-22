
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
                        <h4 class="page-title">Profile</h4>
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
                                    <div class="form-group row">
                                        <strong>Title:</strong>
                                           {{$page->title}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Content:</strong>
                                           {{$page->content}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Permalink:</strong>
                                        {{$page->permalink}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Template:</strong>
                                        {{$page->template}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Visibility Post:</strong>
                                        {{$page->visibility_post}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Published Date:</strong>
                                        {{$page->done_date}}

                                    </div>
                                    <div class="form-group row">
                                        <strong>Author:</strong>
                                        {{$page->usr['name']}}

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
