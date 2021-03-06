
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
                                    <h4 class="card-title">User Profile</h4>
                                     @if($profile==null)
                                    <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group row">

                                        <label class="col-sm-3 text-right control-label col-form-label">User Name
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" required placeholder="Enter Username"
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
                                        <label class="col-sm-3 text-right control-label col-form-label">User Email
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" required placeholder="Enter User Email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{old('email','')}}" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Website
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="website" required placeholder="Website"
                                            class="form-control @error('website') is-invalid @enderror"
                                            value="{{old('website','')}}" />
                                        @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Biographical Info</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="biographical_info"
                                            class="ckeditor form-control"
                                           >{{old('biographical_info','')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Profile Picture
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="profile_picture"
                                            class="form-control"
                                            value="{{old('profile_picture','')}}" />
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
                            <form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">User Name
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" required placeholder="Enter Username"
                                            class="form-control   @error('name') is-invalid @enderror"
                                            value="{{old('name',$profile->name)}}" />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">User Email
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" required placeholder="Enter User Email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{old('email',$profile->email)}}" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Website
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="website" required placeholder="Website"
                                            class="form-control @error('website') is-invalid @enderror"
                                            value="{{old('website',$profile->website)}}" />
                                        @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Biographical Info</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="biographical_info"
                                            class="ckeditor form-control"
                                           >{{old('biographical_info',$profile->biographical_info)}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Profile Picture
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="profile_picture"
                                            class="form-control"
                                            value="{{old('profile_picture','')}}" />
                                            <a href="{{asset('Uploads/Profile/Picture/'.$profile->profile_picture)}}"
                                                target="_blank">
                                            <img src="{{ asset('Uploads/Profile/Picture/'.$profile->profile_picture) }}" alt="" width="200px">
                                            {{$profile->profile_picture}}</a><br>
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
