@extends('Admin.layouts.master')
@section('page_title','Users')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header bg-info">
                    <h2 class="card-title text-bold">Create User</h2>
                    <a href="{{ route('users.index') }}" class="card-title btn bg-lightblue float-right">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{-- @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif --}}

                    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>User Email</strong>
                                        <span class="required text-danger"> * </span>
                                        <select name="email" class="form-control @error('email') is-invalid @enderror">
                                            <option class="bg-info" selected disabled>Choose Email.....</option>
                                            @foreach ($employee as $emp)
                                            <option value="{{$emp->email}}">{{$emp->email}}</option>
                                            @endforeach
                                        </select>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Password</strong>
                                        <span class="required text-danger"> * </span>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            value="{{old('password','')}}" placeholder="Enter Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group select2-info">
                                        <strong>Role</strong>
                                        <span class="required text-danger"> * </span>
                                        <select class="select2 form-control @error('roles') is-invalid @enderror"
                                            data-placeholder="Choose Role..." style="width: 100%;" name="roles[]"
                                            data-live-search="true" style="width: 100%;"
                                            data-dropdown-css-class="select2-info" multiple="multiple">
                                            @foreach ($roles as $r)
                                            <option value="{{$r}}">{{$r}}</option>
                                            @endforeach
                                        </select>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>User Name</strong>
                                        <span class="required text-danger"> * </span>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{old('name','')}}" placeholder="Enter User Name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Confirm-Password</strong>
                                        <span class="required text-danger"> * </span>
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
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-1">
                            <button type="submit" class="btn bg-lightblue">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
