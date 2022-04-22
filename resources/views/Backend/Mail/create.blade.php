
@extends('Backend.layouts.master')
@section('page_title',' Mail Settings')
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
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
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
                            @if($mail == null)
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Mail Settings</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Mailer
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_mailer" required placeholder="Mail Mailer"
                                            class="form-control   @error('mail_mailer') is-invalid @enderror"
                                            value="{{old('mail_mailer','')}}" />
                                        @error('mail_mailer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Host
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_host" required placeholder="Mail Host"
                                            class="form-control @error('mail_host') is-invalid @enderror"
                                            value="{{old('mail_host','')}}" />
                                        @error('mail_host')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Mail Port
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_port" required placeholder="Mail Port"
                                            class="form-control @error('mail_port') is-invalid @enderror"
                                            value="{{old('mail_port','')}}" />
                                        @error('mail_port')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Username
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_username" required placeholder="Enter Name of User"
                                            class="form-control   @error('mail_username') is-invalid @enderror"
                                            value="{{old('mail_username','')}}" />
                                        @error('mail_username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Password
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="password" name="mail_password"
                                            class="form-control @error('mail_password') is-invalid @enderror"
                                            value="{{old('mail_password','')}}" placeholder="Confirm-password">
                                        @error('mail_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Encryption
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_encryption"
                                            class="form-control @error('mail_encryption') is-invalid @enderror"
                                            value="{{old('mail_encryption','')}}" placeholder="Mail Encryption">
                                        @error('mail_encryption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail From Address</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="mail_from_address"
                                            class="form-control @error('mail_from_address') is-invalid @enderror"
                                            value="{{old('mail_from_address','')}}" placeholder="Mail From Address">
                                        @error('mail_from_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail From Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_from_name"
                                            class="form-control @error('mail_from_name') is-invalid @enderror"
                                            value="{{old('mail_from_name','')}}" placeholder="Mail From Name">
                                        @error('mail_from_name')
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
                            @else
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Mail Settings</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Mailer
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_mailer" required placeholder="Mail Mailer"
                                            class="form-control   @error('mail_mailer') is-invalid @enderror"
                                            value="{{old('mail_mailer','')}}" />
                                        @error('mail_mailer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Host
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_host" required placeholder="Mail Host"
                                            class="form-control @error('mail_host') is-invalid @enderror"
                                            value="{{old('mail_host','')}}" />
                                        @error('mail_host')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Mail Port
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_port" required placeholder="Mail Port"
                                            class="form-control @error('mail_port') is-invalid @enderror"
                                            value="{{old('mail_port','')}}" />
                                        @error('mail_port')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Username
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_username" required placeholder="Enter Name of User"
                                            class="form-control   @error('mail_username') is-invalid @enderror"
                                            value="{{old('mail_username','')}}" />
                                        @error('mail_username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Password
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="password" name="mail_password"
                                            class="form-control @error('mail_password') is-invalid @enderror"
                                            value="{{old('mail_password','')}}" placeholder="Confirm-password">
                                        @error('mail_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Encryption
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_encryption"
                                            class="form-control @error('mail_encryption') is-invalid @enderror"
                                            value="{{old('mail_encryption','')}}" placeholder="Mail Encryption">
                                        @error('mail_encryption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail From Address</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="mail_from_address"
                                            class="form-control @error('mail_from_address') is-invalid @enderror"
                                            value="{{old('mail_from_address','')}}" placeholder="Mail From Address">
                                        @error('mail_from_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail From Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_from_name"
                                            class="form-control @error('mail_from_name') is-invalid @enderror"
                                            value="{{old('mail_from_name','')}}" placeholder="Mail From Name">
                                        @error('mail_from_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>



                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Update</button>
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
