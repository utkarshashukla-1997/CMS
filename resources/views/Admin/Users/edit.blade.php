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
                        <li class="breadcrumb-item active">Edit</li>
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
                    <h2 class="card-title text-bold">Edit User</h2>
                    <a href="{{ route('users.index') }}" class="card-title btn bg-lightblue float-right">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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

                    <form action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="">
                            <div class="">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>User Email</strong>
                                        <span class="required text-danger"> * </span>
                                        <input type="text" name="email" disabled
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{old('email',$user->email)}}" placeholder="Enter User email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>User Name</strong>
                                        <span class="required text-danger"> * </span>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{old('name',$user->name)}}" placeholder="Enter User Name">
                                        @error('name')
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
                                            multiple="multiple" style="width: 100%;"
                                            data-dropdown-css-class="select2-info" multiple="multiple" name="roles[]">
                                            @foreach ($user->roles as $r)
                                            <option value="#" selected>{{$r->name}}</option>
                                            @endforeach
                                            <option class="bg-info" disabled>Select Role...</option>
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
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-1">
                            <button type="submit" class="btn bg-lightblue">Update</button>
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
