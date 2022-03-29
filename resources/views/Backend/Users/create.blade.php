
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
                        <h4 class="page-title">Profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Create User</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">User Email
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" required placeholder="Enter Email"
                                            class="form-control   @error('email') is-invalid @enderror"
                                            value="{{old('email','')}}" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Password
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" required placeholder="Enter New Password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            value="{{old('password','')}}" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Role
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control m-t-15 @error('roles') is-invalid @enderror"
                                            data-placeholder="Choose Role..." style="width: 100%;" name="roles[]" id="select2"
                                            data-live-search="true" style="width: 100%;"
                                            data-dropdown-css-class="select2-info" multiple="multiple">
                                            @foreach ($roles as $r)
                                            <option value="{{$r}}">{{$r}}</option>
                                            @endforeach
                                        </select>
                                        @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">User Name
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" required placeholder="Enter Email"
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
                                        <label class="col-sm-3 text-right control-label col-form-label">Confirm Password
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="password" name="confirm-password"
                                            class="form-control @error('confirm-password') is-invalid @enderror"
                                            value="{{old('confirm-password','')}}" placeholder="Confirm-password">
                                        @error('confirm-password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>



                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Submit</button>
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
