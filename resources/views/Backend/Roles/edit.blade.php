@extends('Backend.layouts.master')
@section('page_title','Roles')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Roles</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles</a></li>
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
                    <h2 class="card-title text-bold">Edit Role</h2>
                    <a href="{{ route('roles.index') }}" class="card-title btn bg-lightblue float-right">Back</a>
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

                    <form action="{{ route('roles.update',$role->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role Name</strong>
                                <span class="required text-danger"> * </span>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{old('name',$role->name)}}" placeholder="Enter Role Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission <i>(select to assign)</i> :</strong>
                                <br />
                                &ensp;
                                <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Permissions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($permission as $value)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" name="permission[]" value="{{$value->id}}"
                                                        {{in_array($value->id, $rolePermissions) ? 'checked' : false}}>
                                                    &ensp;
                                                    {{$value->name}}
                                                </label> &ensp; <br>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>


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
