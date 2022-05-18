
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

                                <div class="card-body">
                                    <h4 class="card-title">Tag Details</h4>
                                    <a href="{{ route('tag.index') }}" class="btn btn-success float-right">Back
                                    </a>
                                    <div class="form-group row">
                                        <strong>Name:</strong>
                                           {{$tag->name}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Slug:</strong>
                                           {{$tag->slug}}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Description:</strong>
                                           {!!$tag->description!!}
                                    </div>
                                    <div class="form-group row">
                                        <strong>Featured Image:</strong>
                                        @if($tag->file_image!=[])
                                        <a href="{{asset('/Uploads/Tags/File/'.$tag->file_image)}}"
                                            target="_blank">
                                        <img src="{{ asset('/Uploads/Tags/File/'.$tag->file_image) }}" alt="" width="200px">
                                        {{$tag->file_image}}</a><br>
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
