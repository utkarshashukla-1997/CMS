
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
                        <h4 class="page-title">Comment</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Comment</li>
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
                                    <h4 class="card-title">Comment Details</h4>
                                    <a href="{{ route('comment.index') }}" class="btn btn-success float-right">Back
                                    </a>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Author:</strong>
                                        <div class="col-md-9">
                                           {{$comment->usr['name']}}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">Comment Done:</strong>
                                        <div class="col-md-9">
                                           {!!$comment->comment_done!!}
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <strong class="col-md-3">In Response To:</strong>
                                        <div class="col-md-9">
                                            {{$comment->pos['title']}}
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                        <strong class="col-md-3">Submitted On:</strong>
                                            {{$comment->submitted_on}}
                                        <div class="col-md-9">
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
