
@extends('Backend.layouts.master')
@section('page_title',' Comment')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Comment</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Comment</li>
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
                            <form action="{{route('comment.update',$comment->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h4 class="card-title">Create Comment</h4>
                                    <input type="hidden" class="form-control" value="{{Auth::user()->id}}" required readonly name="user_id" />


                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Comment Done
                                        </label>
                                        <div class="col-sm-9">
                                             <textarea type="text" name="comment_done"
                                            class="ckeditor form-control" placeholder="Comment Done"
                                           >{{old('comment_done',$comment->comment_done)}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> In Response To
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('post_id') is-invalid @enderror"
                                            name="post_id">
                                            <option value="{{$comment->post_id}}" selected>{{$comment->pos['title']}}
                                            <option class="bg-info" disabled>In response to....</option>
                                            @foreach ($post as $post)
                                            <option value="{{$post->id}}">{{$post->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('post_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Submitted On
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="date" name="submitted_on"
                                            class="form-control   @error('submitted_on') is-invalid @enderror"
                                            value="{{old('submitted_on',$comment->submitted_on)}}" />
                                        @error('submitted_on')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>



                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
