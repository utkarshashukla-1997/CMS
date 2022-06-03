
@extends('Backend.layouts.master')
@section('page_title',' Order')
@section('content')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Order</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order</li>
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
                            <form action="{{ route('order.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h4 class="card-title">Edit Order</h4>
                                    <div class="form-group row">
                                        <input type="hidden" class="form-control" value="{{Auth::user()->id}}" required readonly
                                        name="recorded_by" />
                                        <label class="col-sm-3 text-right control-label col-form-label">Order Number
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="order_no" required placeholder="Enter Order Number"
                                            class="form-control   @error('order_no') is-invalid @enderror"
                                            value="{{old('order_no',$order->order_no)}}" />
                                        @error('order_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Customer Name
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="customer_name" required placeholder="Enter Customer Name"
                                            class="form-control   @error('customer_name') is-invalid @enderror"
                                            value="{{old('customer_name',$order->customer_name)}}" />
                                        @error('customer_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Customer Email
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="customer_email" required placeholder="Enter Customer Email"
                                            class="form-control   @error('customer_email') is-invalid @enderror"
                                            value="{{old('customer_email',$order->customer_email)}}" />
                                        @error('customer_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Customer Address
                                            <span class="required text-danger"> * </span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="customer_address" required placeholder="Enter Customer Address"
                                            class="form-control   @error('customer_address') is-invalid @enderror"
                                            value="{{old('customer_address',$order->customer_address)}}" />
                                        @error('customer_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Customer Country
                                            <span class="required text-danger"> * </span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="customer_country" required placeholder="Enter Customer Country"
                                            class="form-control   @error('customer_country') is-invalid @enderror"
                                            value="{{old('customer_country',$order->customer_country)}}" />
                                        @error('customer_country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Ordered Products
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control @error('product_id') is-invalid @enderror"
                                            name="product_id[]" multiple="multiple" required style="width: 100%;"
                                            data-dropdown-css-class="select2-info" data-placeholder="Select Holiday...">
                                            <option class="bg-info" disabled selected>Select Products....</option>
                                            @foreach ($product as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('product_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Ordered Date
                                            <span class="required text-danger"> * </span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="date" name="ordered_date"
                                            class="form-control   @error('ordered_date') is-invalid @enderror"
                                            value="{{old('ordered_date',$order->ordered_date)}}" />
                                        @error('ordered_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label"> Order Status
                                            <span class="required text-danger"> * </span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('status') is-invalid @enderror" name="status">
                                                <option class="bg-info" disabled selected>Select Order Status....</option>
                                                <option value="Completed" {{old('status')=='Completed' ?'selected':''}}>Completed
                                                </option>
                                                <option value="Processing" {{old('status')=='Processing' ?'selected':''}}>Processing
                                                </option>
                                                <option value="Cancelled" {{old('status')=='Cancelled' ?'selected':''}}>Cancelled
                                                </option>
                                                <option value="Refunded" {{old('status')=='Refunded' ?'selected':''}}>Refunded
                                                </option>
                                                <option value="On Hold" {{old('status')=='On Hold' ?'selected':''}}>On Hold
                                                </option>
                                                <option value="Payment Pending" {{old('status')=='Payment Pending' ?'selected':''}}>Payment Pending
                                                </option>
                                            </select>
                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Amount
                                            <span class="required text-danger"> * </span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="amount" required placeholder="Enter Customer Address"
                                            class="form-control   @error('amount') is-invalid @enderror"
                                            value="{{old('amount',$order->amount)}}" />
                                        @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Remarks</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="remarks"
                                    class="ckeditor form-control" placeholder="Enter Department Description"
                                   >{{old('remarks',$order->remarks)}}</textarea>
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
