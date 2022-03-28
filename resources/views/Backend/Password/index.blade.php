
@extends('Backend.layouts.master')
@section('page_title','Change-Password')
@section('content')
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Profile</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Change Password</h5>
                                <div class="card-body">
                                    <form action="{{ route('password.update') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group row">
                                                <strong>Current Password
                                                    <span class="required text-danger"> * </span>
                                                </strong>
                                                <input type="password" name="old_password" required placeholder="Enter Current Password"
                                                    id="exampleInputEmail"
                                                    class="form-control   @error('old_password') is-invalid @enderror"
                                                    value="{{old('old_password','')}}" />
                                                @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group row">
                                                <strong>New Password
                                                    <span class="required text-danger"> * </span>
                                                </strong>
                                                <input type="password" name="new_password" required placeholder="Enter New Password"
                                                    id="exampleInputEmail"
                                                    class="form-control   @error('new_password') is-invalid @enderror"
                                                    value="{{old('new_password','')}}" />
                                                @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group row">
                                                <strong>Confirm New Password
                                                    <span class="required text-danger"> * </span>
                                                </strong>
                                                <input type="password" name="new_confirm_password" required
                                                    placeholder="Confirm New Password" id="exampleInputEmail"
                                                    class="form-control   @error('new_confirm_password') is-invalid @enderror"
                                                    value="{{old('new_confirm_password','')}}" />
                                                @error('new_confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-1">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
            </div>
            </div>
        @endsection
