@extends('Backend.layouts.master')
@section('page_title','Media')
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
                                <li class="breadcrumb-item active" aria-current="page">Media</li>
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
                            <h3 class="card-title">Media File Management</h3>
                            @can('media-create')
                            <a href="{{ route('media.create') }}" class="card-title btn btn-success float-right">Add
                                +</a>
                            @endcan
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Uploaded File</th>
                                            <th>Uploaded Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $media)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td> <a href="{{asset('Uploads/Media/File/'.$media->media_file)}}"
                                                target="_blank">
                                            <img src="{{ asset('Uploads/Media/File/'.$media->media_file) }}" alt="" width="200px">
                                            {{$media->media_file}}</a><br></td>
                                            <td>{{$media->uploaded_date}}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('media.show',$media->id) }}"><i
                                                        class="fa fa-eye"></i></a>
                                                @can('media-edit')
                                                <a class="btn btn-primary" href="{{ route('media.edit',$media->id) }}"><i
                                                        class="fa fa-edit"></i></a>
                                                @endcan
                                                @can('media-delete')
                                                <button class="btn btn-danger waves-effect waves-light"
                                                    data-target="#deleteMedia{{$media->id}}" data-toggle="modal" type="submit"><i
                                                        class="fa fa-trash-alt"></i></button>
                                                <form action="{{ route('media.destroy', $media->id)}}" method="post"
                                                    style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="row">
                                                        <div class="col-md-4 mt-4">
                                                            <!-- sample modal content -->
                                                            <div id="deleteMedia{{$media->id}}" class="modal fade" tabindex="-1"
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
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Uploaded File</th>
                                            <th>Uploaded Date</th>
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
