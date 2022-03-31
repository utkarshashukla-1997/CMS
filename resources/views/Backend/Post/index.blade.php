@extends('Backend.layouts.master')
@section('page_title','Users')
@section('content')
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Tables</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Post Management</h3>
                            @can('post-create')
                            <a href="{{ route('post.create') }}" class="card-title btn btn-success float-right">Add
                                +</a>
                            @endcan
                            <div class="table-responsive">
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

                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection
