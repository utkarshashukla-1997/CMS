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
                        <li class="breadcrumb-item active">Users</li>
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
                    <h2 class="card-title text-bold">User Management</h2>
                    @can('user-create')
                    <a href="{{ route('users.create') }}" class="card-title btn bg-success float-right">Add
                        +</a>
                    @endcan
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}"><i
                                            class="fa fa-eye"></i></a>
                                    @if ($user->id != 1)
                                    @can('user-edit')
                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i
                                            class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('user-delete')
                                    <button class="btn btn-danger waves-effect waves-light"
                                        data-target="#deleteUsers{{$user->id}}" data-toggle="modal" type="submit"><i
                                            class="fa fa-trash-alt"></i></button>
                                    <form action="{{ route('users.destroy', $user->id)}}" method="post"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <div class="row">
                                            <div class="col-md-4 mt-4">
                                                <!-- sample modal content -->
                                                <div id="deleteUsers{{$user->id}}" class="modal fade" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class="row">
                                                                    <div class="col-lg-12 margin-tb">
                                                                        <div class="pull-left">
                                                                            <h2>Delete Record ?</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if (count($errors) > 0)
                                                                <div class="alert alert-danger">
                                                                    <strong>Whoops!</strong> There were some
                                                                    problems with your
                                                                    input.<br><br>
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                @endif
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <p class="text-danger">Are You Sure ? Once
                                                                            you delete data, you
                                                                            cannot get it back.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-secondary waves-effect"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Delete</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                        </div>
                                    </form>
                                    @endcan
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
