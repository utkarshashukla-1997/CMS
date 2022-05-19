
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
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                                    <h4 class="card-title">Mail Settings</h4>
                                     @if($mail==null)
                                    <form action="{{route('mail.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group row">

                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Mailer
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_mailer" required placeholder="Enter Mail Mailer"
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
                                            <input type="text" name="mail_host" required placeholder="Enter Mail Host"
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
                                            <input type="text" name="mail_port" required placeholder="Enter Mail Port"
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
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_username"
                                            class="form-control" required placeholder="Enter Mail Username"
                                            value="{{old('mail_username','')}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Password
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="password" name="mail_password"
                                            class="form-control" required placeholder = "Enter Mail Password"
                                            value="{{old('mail_password','')}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail Encryption
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_encryption"
                                            class="form-control" required placeholder = "Enter Mail Encryption"
                                            value="{{old('mail_encryption','')}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail From Address
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_from_address"
                                            class="form-control" required placeholder = "Enter Mail From Address"
                                            value="{{old('mail_from_address','')}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mail From Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mail_from_name"
                                            class="form-control" required placeholder="Enter Mail from Name"
                                            value="{{old('mail_from_name','')}}" />
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
                                    <form action="{{route('mail.update',$mail->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">

                                            <label class="col-sm-3 text-right control-label col-form-label">Mail Mailer
                                                <span class="required text-danger"> * </span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mail_mailer" required placeholder="Enter Mail Mailer"
                                                class="form-control   @error('mail_mailer') is-invalid @enderror"
                                                value="{{old('mail_mailer',$mail->mail_mailer)}}" />
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
                                                <input type="text" name="mail_host" required placeholder="Enter Mail Host"
                                                class="form-control @error('mail_host') is-invalid @enderror"
                                                value="{{old('mail_host',$mail->mail_host)}}" />
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
                                                <input type="text" name="mail_port" required placeholder="Enter Mail Port"
                                                class="form-control @error('mail_port') is-invalid @enderror"
                                                value="{{old('mail_port',$mail->mail_port)}}" />
                                            @error('mail_port')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Mail Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mail_username"
                                                class="form-control" required placeholder="Enter Mail Username"
                                                value="{{old('mail_username',$mail->mail_username)}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Mail Password
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="password" name="mail_password"
                                                class="form-control" required placeholder = "Enter Mail Password"
                                                value="{{old('mail_password',$mail->mail_password)}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Mail Encryption
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mail_encryption"
                                                class="form-control" required placeholder ="Enter Mail Encryption"
                                                value="{{old('mail_encryption',$mail->emcryption)}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Mail From Address
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mail_from_address"
                                                class="form-control" required placeholder = "Enter Mail from address"
                                                value="{{old('mail_from_address',$mail->mail_from_address)}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Mail From Name
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mail_from_name"
                                                class="form-control" required placeholder="Enter Mail from Name"
                                                value="{{old('mail_from_name',$mail->mail_from_name)}}" />
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
