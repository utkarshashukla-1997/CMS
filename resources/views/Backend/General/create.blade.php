
@extends('Backend.layouts.master')
@section('page_title',' Profile')
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


                                <div class="card-body">
                                    <h4 class="card-title">General Settings</h4>
                                     @if($general==null)
                                    <form action="{{route('general.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group row">

                                        <label class="col-sm-3 text-right control-label col-form-label">Site Title
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="site_title" required placeholder="Enter Site Title"
                                            class="form-control   @error('site_title') is-invalid @enderror"
                                            value="{{old('site_title','')}}" />
                                        @error('site_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Tag Line
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tagline" required placeholder="Enter User Email"
                                            class="form-control @error('tagline') is-invalid @enderror"
                                            value="{{old('tagline','')}}" />
                                        @error('tagline')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Website URL
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="url" required placeholder="Website"
                                            class="form-control @error('url') is-invalid @enderror"
                                            value="{{old('url','')}}" />
                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Logo</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="logo_image"
                                            class="form-control"
                                            value="{{old('logo_image','')}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Background
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="background_image"
                                            class="form-control"
                                            value="{{old('background_image','')}}" />
                                        </div>
                                    </div>


                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                              @else
                                <div class="card-body">
                                    <form action="{{route('general.update',$general->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="form-group row">

                                        <label class="col-sm-3 text-right control-label col-form-label">Site Title
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="site_title" required placeholder="Enter Site Title"
                                            class="form-control   @error('site_title') is-invalid @enderror"
                                            value="{{old('site_title',$general->site_title)}}" />
                                        @error('site_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Tag Line
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tagline" required placeholder="Enter User Email"
                                            class="form-control @error('tagline') is-invalid @enderror"
                                            value="{{old('tagline',$general->tagline)}}" />
                                        @error('tagline')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Website URL
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="url" required placeholder="Website"
                                            class="form-control @error('url') is-invalid @enderror"
                                            value="{{old('url',$general->url)}}" />
                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Logo</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="logo_image"
                                            class="form-control"
                                            value="{{old('logo_image','')}}" />
                                            <img src="{{ asset('Uploads/Settings/General/'.$general->logo_image) }}" alt="" width="200px">
                                            {{$general->logo_image}}</a><br>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Background
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="background_image"
                                            class="form-control"
                                            value="{{old('background_image','')}}" />
                                            <img src="{{ asset('Uploads/Settings/General/'.$general->background_image) }}" alt="" width="200px">
                                            {{$general->background_image}}</a><br>
                                        </div>
                                    </div>


                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                            @endif
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
